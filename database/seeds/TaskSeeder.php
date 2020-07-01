<?php

use Illuminate\Database\Seeder;
use App\Models\Task;
use App\Models\Comment;
use App\Models\Attachment;
use App\Models\Task_User_User_Type;
use App\Models\User_Type;
use App\Models\Role_Team_User;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Comment::class, 5)->create();
        factory(Attachment::class, 5)->create();
        factory(Task::class, 20)->create();
        ///factory(Task_User_User_Type::class, 12)->create();
    }
}
