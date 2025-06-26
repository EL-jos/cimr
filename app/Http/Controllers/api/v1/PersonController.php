<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Models\Document;
use App\Models\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Person::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $validators = Validator::make($request->all(), [
            'firstname' => 'required|max:255|string|min:1',
            'lastname' => 'required|max:255|string|min:1',
            'birthdate' => 'required|date',
            'kids' => 'required|max:255|numeric|min:0',
            'gender_id' => 'required|exists:genders,id',
            'marital_status_id' => 'required|exists:marital_statuses,id',
            'post_id' => 'required|exists:posts,id',
            'role_id' => 'required|array',
            'role_id.*' => 'required|exists:roles,id',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp,bmp|max:1024',
        ]);

        if ($validators->fails()) {
            return redirect()->back()->withErrors($validators)->withInput();
        }

        /**
         * @var Person $person
         */
        $person = Person::create([
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'birthdate' => $request->input('birthdate'),
            'kids' => $request->input('kids'),
            'gender_id' => $request->input('gender_id'),
            'marital_status_id' => $request->input('marital_status_id'),
            'post_id' => $request->input('post_id'),
        ]);

        if($person){

            $person->roles()->sync($request->input('role_id'));

            if ($request->hasFile('avatar')) {
                $files = $request->file('avatar');
                $this->saveDocument($files, $person, 'image');
            }

            return redirect()->route('person.show', $person);
        }

        return redirect()->back()->withErrors(['person' => 'Person not created'])->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function show(Person $person)
    {
        $person->load(['document', 'gender', 'post', 'roles', 'maritalStatus']);
        return view('frontend.pages.persons.show', [
            'person' => $person
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Person $person)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function destroy(Person $person)
    {
        return $person->delete();
    }

    private function moveImage($file)
    {
        $currentDateTime = Carbon::now();
        $formattedDateTime = $currentDateTime->format('Ymd_His');

        $path_file = (string) Str::uuid() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('assets/resources/persons/'), $path_file);

        return "assets/resources/persons/" . $path_file;
    }

    // Méthode pour supprimer une image
    private function deleteImage($path)
    {
        if ( file_exists( public_path($path) ) ) {
            unlink(public_path($path));
        }
    }

    private function saveDocument($files, Person $person, string $type){

        if (is_array($files)) {

            foreach ($files as $file) {
                $documentPath = $this->moveImage($file);
                $document = new Document(['path' => $documentPath, 'type' => $type]);
                $person->document()->save($document);
            }

        } else {

            $documentPath = $this->moveImage($files);
            $document = new Document(['path' => $documentPath, 'type' => $type]);
            $person->document()->save($document);

        }
    }

    public function uploadDocument(Request $request, Person $person){

        if ($request->hasFile('avatar')) {
            $files = $request->file('avatar');
            //dd($files);
            if (is_array($files)) {
                foreach ($files as $file) {
                    $documentPath = $this->moveImage($file);
                    $document = new Document(['type' => 'image', 'path' => $documentPath]);
                    $person->document()->save($document);
                    //dump($imagePath);
                }
            } else {
                $documentPath = $this->moveImage($files);
                $document = new Document(['type' => 'image', 'path' => $documentPath]);
                $person->document()->save($document);
            }
            return response()->json(['message' => 'Votre Image a bien été mis à jour', 'code' => 0]);
        }
        return response()->json(['message' => 'Aucune image trouvée.', 'code' => 1]);
    }
}
