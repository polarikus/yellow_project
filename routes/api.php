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
/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/

//Получить всех пользователей

Route::get('/user', 'User\UserController@getUsers')->name('GetUsers');

//Получить одного пользователя по id

Route::get('/user/{id}', 'User\UserController@getUserById')->name('GetUserById');
