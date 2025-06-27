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

class PageController extends Controller
{
    public function home(){
        return view('frontend.pages.home');
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

    public function logIn(){
        return view('frontend.pages.auth.log-in');
    }
}
