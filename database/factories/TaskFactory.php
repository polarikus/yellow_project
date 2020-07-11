<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Task;
use App\Models\Team;
use App\Models\TaskType;
use App\Models\Status;
use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
    $solved_at = function () use ($faker){
        if (rand(0,1) == 1){
            return $faker->dateTimeBetween('-20 days', 'now');
        }else{
            return null;
        }
    };
    $team_id = function (){
        $rand = rand(1,4);
        if (Team::where('id', '=', $rand)->exists()){
            return $rand;
        }else{
            return factory(Team::class);
        }
    };
    return [
        'team_id' => $team_id,
        'task_type_id' => rand(1,4),
        'name' => $faker->jobTitle,
        'status_id' => rand(1,6),
        'before_date' => $faker->dateTimeBetween('now', '+20 days'),
        'solved_at' => $solved_at

    ];
});
