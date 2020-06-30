<?php

use App\Models\Role;
use App\Models\Task;
use App\Models\Team;
use App\Models\Status;
use App\Models\Comment;
use App\Models\Task_Type;
use App\Models\User_Type;
use App\Models\Role_Team_User;
use App\Models\Task_User_User_Type;
use Faker\Generator as Faker;
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
            //RoleSeeder::class,
            //StatusesSeeder::class,
            //TaskTypeSeeder::class,
            //TeamSeeder::class
            TaskSeeder::class
        ]);
    }
    
      
}
