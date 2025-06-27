<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::apiResource('/person', \App\Http\Controllers\api\v1\PersonController::class);
Route::apiResource('/leave', \App\Http\Controllers\api\v1\LeaveController::class);
Route::post('/leave/status/{leave}', [\App\Http\Controllers\api\v1\LeaveController::class, 'updateStatus'])->name('leave.updateStatus');
Route::controller(\App\Http\Controllers\api\v1\ListModelController::class)->group(function () {
    Route::get('/genders','genders');
    Route::get('/maritalStatuses','maritalStatuses');
    Route::get('/posts','posts');
    Route::get('/roles','roles');
    Route::get('/types','types');
});
