<?php

namespace App\Http\Controllers\Team;

use App\Http\Controllers\Controller;
use App\Models\Role_Team_User;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
{
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
}
