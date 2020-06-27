<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function getUsers() {
        return response()->json(User::get());
    }

    public function getUserById($id){
        return response()->json(User::find($id));
    }
}
