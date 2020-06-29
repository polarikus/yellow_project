<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Task_Type;
use Faker\Generator as Faker;

$factory->define(Task_Type::class, function (Faker $faker) {

    $name = $faker->colorName;
    $description = $faker->sentence(5);

    return [
        
        'name' => $name,
        'description' => $description

    ];
});
