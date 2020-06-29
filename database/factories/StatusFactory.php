<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Status;
use Faker\Generator as Faker;

$factory->define(Status::class, function (Faker $faker) {

    $name = $faker->title;

    return [

        'name' => $name

    ];
});
