<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
   
    $text = $faker->sentence(3);
    //$user_id = $faker->nir;
    //$task_id = $faker->nir;

    return [
        
        'text' => $text,
        'user_id' => function () {
            return factory(App\Models\User::class)->create()->id;
          },
        'task_id' => function () {
            return factory(App\Models\Task::class)->create()->id;
          }
    ];
});
