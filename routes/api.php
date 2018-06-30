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

Route::get('clients', 'ClientController@index');
Route::get('client/{id}', 'ClientController@show');
Route::post('client', 'ClientController@store');
Route::put('client', 'ClientController@store');
Route::delete('client', 'ClientController@destroy');