<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Team;
use App\User;
use App\Models\Role;
use Faker\Generator as Faker;

$factory->define(Team::class, function (Faker $faker) {
    $role = Role::class;
    $creator_id = function (){
        $rand = rand(1,5);
        if (User::where('id', '=', $rand)->exists()){
            return $rand;
        }else{
            return factory(User::class);
        }
    };
    return [
        'creator_id' => $creator_id,
        'name' => $faker->colorName
    ];
});
