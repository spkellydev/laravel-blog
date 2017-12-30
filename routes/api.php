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
Route::get('technology/{id}', 'TechnologyController@show');
Route::post('technology', 'TechnologyController@store');
Route::put('technology', 'TechnologyController@store');
Route::delete('technology/{id}', 'TechnologyController@destroy');
