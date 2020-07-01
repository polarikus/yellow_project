<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {

    return [

        'text' => $faker->sentence(3),
        'user_id' => function () {
            return factory(App\User::class)->create()->id;
          },
        'task_id' => function () {
            return factory(App\Models\Task::class)->create()->id;
          }
    ];
});
