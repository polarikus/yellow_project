<?php

use Illuminate\Database\Seeder;

class RoleTeamUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = App\Models\Role::all();

        App\Models\User::all()->each(function ($user) use ($roles) {
            $user->roles()->attach(
                $roles->random(rand(1, 3))->pluck('id')->toArray(),
                ['team_id' => rand(1, 3)]
            );
        });

    }
}
