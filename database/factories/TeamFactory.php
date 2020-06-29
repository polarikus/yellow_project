<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Team;
use Faker\Generator as Faker;

$factory->define(Team::class, function (Faker $faker) {

    $name = $faker->jobTitle;
    return [
        'name' => $name,
        'creator_id' => function () {
            return factory(App\Models\User::class)->create()->id;
          },
    ];
});
