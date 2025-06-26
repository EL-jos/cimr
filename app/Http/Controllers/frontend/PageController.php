<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Gender;
use App\Models\MaritalStatus;
use App\Models\Person;
use App\Models\Post;
use App\Models\Role;
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
}
