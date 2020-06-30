<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Team;
use App\User;
use Faker\Generator as Faker;

$factory->define(Team::class, function (Faker $faker) {
    return [
        'creator_id' => factory(User::class),
        'name' => $faker->colorName
    ];
});
