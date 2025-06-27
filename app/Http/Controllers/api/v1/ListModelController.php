<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Models\Gender;
use App\Models\MaritalStatus;
use App\Models\Post;
use App\Models\Role;
use App\Models\Type;
use Illuminate\Http\Request;

class ListModelController extends Controller
{
    public function genders(){
        return response()->json(Gender::all());
    }
    public function maritalStatuses(){
        return response()->json(MaritalStatus::all());
    }
    public function posts(){
        return response()->json(Post::all());
    }
    public function roles(){
        return response()->json(Role::all());
    }

    public function types()
    {
        return response()->json(Type::all());
    }
}
