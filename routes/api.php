<?php

use Illuminate\Http\Request;

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

Route::get('/user', function (Request $request) {
    return "hello";
})->middleware('jwt.auth');


Route::post('auth', 'Api\AuthController@authenticate');
Route::get('auth/me', 'Api\AuthController@getAuthenticatedUser');


// get list of tasks
Route::get('tasks','TaskController@index')->middleware('jwt.auth');
// get specific task
Route::get('task/{id}','TaskController@show');
// delete a task
Route::delete('task/{id}','TaskController@destroy');
// update existing task
Route::put('task','TaskController@store');
// create new task
Route::post('task','TaskControllekr@store');