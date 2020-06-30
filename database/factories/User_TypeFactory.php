<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\User_Type;
use Faker\Generator as Faker;

$factory->define(User_Type::class, function (Faker $faker) {
    
    return [
        
        'name' => $faker->word;
    ];
});
