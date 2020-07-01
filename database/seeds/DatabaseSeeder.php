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
            StatusesSeeder::class,
            TaskTypeSeeder::class,
            UserTypeSeeder::class,
            TaskSeeder::class
        ]);
    }
}
