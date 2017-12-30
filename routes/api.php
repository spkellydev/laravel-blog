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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('technologies', 'TechnologyController@index');
Route::post('technologies', 'TechnologyController@store');
Route::put('technologies', 'TechnologyController@update');
Route::delete('technologies/{id}', 'TechnologyController@destroy');
Route::get('technologies/{id}', 'TechnologyController@show');
