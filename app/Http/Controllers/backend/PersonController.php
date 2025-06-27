<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function edit(Person $person)
    {
        //
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
        $isUpdte = $person->update([
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'birthdate' => $request->input('birthdate'),
            'kids' => $request->input('kids'),
            'gender_id' => $request->input('gender_id'),
            'marital_status_id' => $request->input('marital_status_id'),
            'post_id' => $request->input('post_id'),
        ]);

        if($isUpdte){

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
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function destroy(Person $person)
    {
        //
    }
}
