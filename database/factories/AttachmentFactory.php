<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Attachment;
use App\Models\Task;
use Faker\Generator as Faker;

$factory->define(Attachment::class, function (Faker $faker) {



    return [

        'task_id' => function () {
            return factory(App\Models\Task::class)->create()->id;
          },
          'path' => $faker->url,
          'file_extension' => $faker->fileExtension
    ];
});
