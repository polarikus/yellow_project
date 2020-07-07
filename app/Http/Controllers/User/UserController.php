<?php

namespace App\Http\Controllers\User;

use App\Exceptions\externalError;
use App\Exceptions\UserNotFoundException;
use App\Http\Controllers\Controller;
use App\Models\Team;
use App\User;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\New_;


class UserController extends Controller
{
    /**
     * Получить всех пользователей с пагинацией
     * @param User $user
     * @return \Illuminate\Http\JsonResponse
     * @throws NotFoundException
     */
    public function getUsers(User $user)
    {
        $resp = $user->paginate(1);
        if (!$resp) {
            throw new NotFoundException();
        }
        return response()->json($resp, 200);
    }

    /**
     * Получить пользователя по id
     * @param int $id id пользователя
     * @param User $user
     * @return \Illuminate\Http\JsonResponse
     * @throws NotFoundException
     */
    public function getUserById(int $id, User $user)
    {
        $resp = $user->find($id);
        if (!$resp) {
            throw new NotFoundException();
        }
        return response()->json($resp, 200);
    }

    /**
     * Удаление пользователя по id
     * @param $id
     * @param User $user
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     * @throws externalError
     * @throws NotFoundException
     */
    public function deleteUser($id, User $user)
    {
        $resp = $user->find($id);
        if (!$resp) {
            throw new NotFoundException();
        }
        if ($resp->delete()) {
            return response('', 200);
        } else {
            throw new externalError();
        }

    }
}
