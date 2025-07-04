<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Gender;
use App\Models\Leave;
use App\Models\MaritalStatus;
use App\Models\Person;
use App\Models\Post;
use App\Models\Role;
use App\Models\Status;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class PageController extends Controller
{
    public function home(){
        $leaves = Leave::all();
        return view('frontend.pages.dashboard', ['leaves' => $leaves]);
    }

    public function users(){
        return view('frontend.pages.persons.list', [
            'persons' => Person::all(),
            'genders' => Gender::all(),
            'maritalStatuses' => MaritalStatus::all(),
            'posts' => Post::all(),
            'roles' => Role::all()
        ]);
    }

    public function person(Person $person){

        if($person->roles->contains(1)){
            return view('frontend.pages.persons.show', [
                'person' => $person,
                'genders' => Gender::all(),
                'maritalStatuses' => MaritalStatus::all(),
                'posts' => Post::all(),
                'roles' => Role::all(),
                'statuses' => Status::all(),
                'types' => Type::all(),
                'leaves' => Leave::all()
            ]);
        }
        return view('frontend.pages.persons.show', [
            'person' => $person,
            'genders' => Gender::all(),
            'maritalStatuses' => MaritalStatus::all(),
            'posts' => Post::all(),
            'roles' => Role::all(),
            'types' => Type::all(),
            'statuses' => Status::all(),
        ]);
    }

    public function logIn(Request $request){

        if($request->isMethod('POST')){

            $validators = Validator::make($request->all(), [
                'email' => 'required|email|exists:persons,email',
                'password' => 'required'
            ]);

            if($validators->fails()){
                return redirect()->back()->withErrors($validators)->withInput();
            }

            /**
             * @var Person $person
             */
            $person = Person::where('email', '=', $request->input('email'))->first();
            if($person){

                if(password_verify($request->input('password'), $person->password)){

                    session()->put('person', collect([
                        'id' => $person->id,
                        'email' => $person->email
                    ]));

                    return redirect()->route('person.show', $person)->with('success', "Connexion réussie. Bienvenue !");

                }else{

                    return redirect()->route('logIn.page')->with('error', "Les identifiants saisis sont incorrects.")->withInput();
                }

            }
        }
        return view('frontend.pages.auth.log-in');
    }

    public function logOut(){
        Session::flush();
        return redirect()->route('logIn.page')->with('success',"déconnection réusit");
    }
}
