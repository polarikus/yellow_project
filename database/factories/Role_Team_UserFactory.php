<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Role;
use App\Models\Team;
use App\Models\User;
use Faker\Generator as Faker;
use App\Models\Role_Team_User;

$factory->define(Role_Team_User::class, function (Faker $faker) {
    return [
        
        'user_id' =>  function () {
            return factory(User::class)->create()->id;
          },
          'team_id' => function () {
            return factory(Team::class)->create()->id;
          },
          'role_id' => function () {
            return factory(Role::class)->create()->id;
          },
    ];
});
