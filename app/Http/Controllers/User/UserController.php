<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function getUsers() {
        return response()->json(User::paginate(15), 200);
    }

    public function getUserById($id){
        if (User::where('id', '=', $id)->exists()){
            return response()->json(User::find($id), 200);
        }else{
            return response()->json([
                'error' => "Пользователь с id = $id не найден"
            ], 412);
        }
    }

    public function deleteUser($id){
        if (User::where('id', '=', $id)->exists()){
            $user = User::find($id);
            if (User::where('id', '=', $id)->delete()){
                return response()->json([
                    'result' => 'Удалён',
                    'user' => $user
                ], 200);
            }else{
                return response()->json([
                    'error' => 'Ошибка удаления в БД'
                ], 500);
            }
        }else{
            return response()->json([
                'error' => "Пользователь с id = $id не найден"
            ], 412);
        }
    }
}
