<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Task;
use App\Models\User;
use App\Models\Task_Type;
use Faker\Generator as Faker;
use App\Models\Task_User_User_Type;

$factory->define(Task_User_User_Type::class, function (Faker $faker) {
    return [
        
        'task_id' => function () {
            return factory(Task::class)->create()->id;
          },

          'user_id' =>  function () {
            return factory(User::class)->create()->id;
          },
          'task_type_id' => function () {
            return factory(Task_Type::class)->create()->id;
          },
    ];
});
