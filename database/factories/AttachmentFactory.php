<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Attachment;
use App\Models\Task;
use Faker\Generator as Faker;

$factory->define(Attachment::class, function (Faker $faker) {


    $path = $faker->url;
    $file_extension = $faker->fileExtension;

    return [
        
        'task_id' => function () {
            return factory(App\Models\Task::class)->create()->id;
          },
          'path' => $path,
          'file_extension' => $file_extension
    ];
});
