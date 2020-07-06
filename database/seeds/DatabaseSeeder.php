<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    //Если ошибка подключения класса юзай composer dump-autoload
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            TeamSeeder::class,
            UserSeeder::class,
            RoleTeamUserSeeder::class,
            StatusesSeeder::class,
            TaskTypeSeeder::class,
        ]);
    }
}
