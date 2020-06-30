<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Task;
use App\Models\Team;
use App\Models\TaskType;
use App\Models\Status;
use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
    return [
        'team_id' => factory(Team::class),
        'task_type_id' => rand(1,2),
        'name' => $faker->jobTitle,
        'status_id' => rand(1,3),
        'before_date' => $faker->date("Y-m-d H:i:s"),
        'solved_at' => null

    ];
});
