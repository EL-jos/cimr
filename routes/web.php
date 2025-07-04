<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::controller(\App\Http\Controllers\frontend\PageController::class)->group(function () {
    Route::get('/', 'home');
    Route::get('/users', 'users')->name("users.page");
    Route::get('/persons/{person}', 'person')->name("person.show");
    Route::match(['get', 'post'], '/log-in', 'logIn')->name("logIn.page");
    Route::delete('/log-out', 'logOut')->name("logOut.page");
});

Route::resource('/gender', \App\Http\Controllers\backend\GenderController::class);
Route::resource('/maritalStatus', \App\Http\Controllers\backend\MaritalStatusController::class);
Route::resource('/post', \App\Http\Controllers\backend\PostController::class);
Route::resource('/role', \App\Http\Controllers\backend\RoleController::class)->except(['show']);
Route::resource('/type', \App\Http\Controllers\backend\TypeController::class);

Route::resource('person', \App\Http\Controllers\backend\PersonController::class)->except(['show', 'index', 'create', 'edit']);

Route::group(['prefix' => 'trashed'], function (){
    Route::get('/gender', [App\Http\Controllers\backend\GenderController::class, 'trashed'])->name('gender.trashed');
    Route::get('/maritalStatus', [App\Http\Controllers\backend\MaritalStatusController::class, 'trashed'])->name('maritalStatus.trashed');
    Route::get('/post', [App\Http\Controllers\backend\PostController::class, 'trashed'])->name('post.trashed');
    Route::get('/role', [App\Http\Controllers\backend\RoleController::class, 'trashed'])->name('role.trashed');
    Route::get('/type', [App\Http\Controllers\backend\TypeController::class, 'trashed'])->name('type.trashed');
});

Route::group(['prefix' => 'restore'], function (){
    Route::delete('/gender/{gender}', [\App\Http\Controllers\backend\GenderController::class, 'restore'])->name('gender.restore');
    Route::delete('/maritalStatus/{maritalStatus}', [\App\Http\Controllers\backend\MaritalStatusController::class, 'restore'])->name('maritalStatus.restore');
    Route::delete('/post/{post}', [\App\Http\Controllers\backend\PostController::class, 'restore'])->name('post.restore');
    Route::delete('/role/{role}', [\App\Http\Controllers\backend\RoleController::class, 'restore'])->name('role.restore');
    Route::delete('/type/{type}', [\App\Http\Controllers\backend\TypeController::class, 'restore'])->name('type.restore');
});

Route::group(['prefix' => 'forceDelete'], function (){
    Route::delete('/gender/{gender}', [\App\Http\Controllers\backend\GenderController::class, 'forceDelete'])->name('gender.forceDelete');
    Route::delete('/maritalStatus/{maritalStatus}', [\App\Http\Controllers\backend\MaritalStatusController::class, 'forceDelete'])->name('maritalStatus.forceDelete');
    Route::delete('/post/{post}', [\App\Http\Controllers\backend\PostController::class, 'forceDelete'])->name('post.forceDelete');
    Route::delete('/role/{role}', [\App\Http\Controllers\backend\RoleController::class, 'forceDelete'])->name('role.forceDelete');
    Route::delete('/type/{type}', [\App\Http\Controllers\backend\TypeController::class, 'forceDelete'])->name('type.forceDelete');
});

Route::group(['prefix' => 'clear'], function (){
    Route::delete('/blog', [\App\Http\Controllers\backend\GenderController::class, 'clear'])->name('gender.clear');
    Route::delete('/maritalStatus', [\App\Http\Controllers\backend\MaritalStatusController::class, 'clear'])->name('maritalStatus.clear');
    Route::delete('/post', [\App\Http\Controllers\backend\PostController::class, 'clear'])->name('post.clear');
    Route::delete('/role', [\App\Http\Controllers\backend\RoleController::class, 'clear'])->name('role.clear');
    Route::delete('/type', [\App\Http\Controllers\backend\TypeController::class, 'clear'])->name('type.clear');
});
