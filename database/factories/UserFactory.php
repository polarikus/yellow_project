<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Models\User::class, function (Faker $faker) {
    $avatars = [
        'https://avatarko.ru/img/avatar/30/pokemon_naushniki_pikachu_29279.jpg',
        'https://avatarko.ru/img/avatar/11/multfilm_South_Park_Kyle_10024.jpg',
        'https://avatarko.ru/img/avatar/31/igra_mech_Minecraft_30325.jpg',
        'https://avatarko.ru/img/avatar/15/anonim_14967.jpg'
    ];
    return [
        'login' => $faker->userName,
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'phone'=> $faker->numberBetween(0,799999999),
        'avatar_path' => $avatars[rand(0,3)],
        'super_user'=> $faker->boolean,
        'password' => bcrypt('secret'),// password
        'remember_token' => Str::random(10),
    ];
});
