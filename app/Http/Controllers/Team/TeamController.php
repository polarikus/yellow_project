<?php

namespace App\Http\Controllers\Team;

use App\Exceptions\externalError;
use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\Role_Team_User;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Team;
use Illuminate\Support\Facades\DB;

class TeamController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function addLeader(Request $request){
        $team_id = $request->input('team_id');
        $role_id = $request->input('role_id');
        $user_id = $request->input('user_id');
        if (Role_Team_User::where([
            ['role_id', '=', $role_id], ['team_id', '=', $team_id], ['user_id', '=', $user_id]
        ])->exists()){
            //return response()->json('Этой команде уже присвоен пользователь!');
            $team = Team::find($team_id);
            return response()->json(
                $team->roles()->join('role_team_user', 'users.id', '=' ,'role_team_user.user_id')->get()
            );
        }else{
        $team = Team::find($team_id);
        $team->users()->attach($user_id, ['role_id' => $role_id]);
        return response()->json($team->users());
        }
    }


    /**
     * @param $id
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getUsers($id, Request $request){
        $users = Team::find($id);
        $resp = $users->users;
        $role = Role::find($users->users[0]->pivot->role_id);
        $resp->push(['role' => $role]);
        return response()->json($resp,200);

    }
}


