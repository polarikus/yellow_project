<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Task;
use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
    return [

        'team_id' => function () {
            return factory(App\Models\Team::class)->create()->id;
          },
        'task_type_id' => function () {
            return factory(App\Models\Task_Type::class)->create()->id;
          },
        'name' => $faker->name,
        'status_id' => function () {
            return factory(App\Models\Status::class)->create()->id;
          },
        'before_date' => $faker->dateTime($max = 'now', $timezone = null),
        'solved_at' => $faker->dateTime($max = 'now', $timezone = null),
        
    ];
});
