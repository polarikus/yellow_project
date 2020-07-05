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

/*
 * --------------------------------------
 * Группа роутов пользователей без аутентификации (для тестов)
 * --------------------------------------
 */
Route::namespace('User')->prefix('user')->group(function (){
    //Получить всех пользователей
    Route::get('/', 'UserController@getUsers')->name('GetUsers');
    //Получить одного пользователя по id
    Route::get('/{id}', 'UserController@getUserById')->name('GetUserById');
    //Удаление пользователя
    Route::delete('/{id}', 'UserController@deleteUser')->name('DeleteUser');
});

Route::put('team/addLeader', 'Team\TeamController@addLeader')->name('addLeader');
Route::get('team/users/{id}', 'Team\TeamController@getUsers');





