<?php

use Illuminate\Database\Seeder;
use App\Models\TaskType;

class TaskTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->data() as $types){
            TaskType::insert([
                'name' => $types['name'],
                'description' => $types['description'],
            ]);
        }
    }

    private function data(){
        return $data = [
            [
                'name' => 'Общие',
                'description' => 'Задачи для всего аккаунта'
            ],
            [
                'name' => 'Личные',
                'description' => 'Задачи для одного человека'
            ],
            [
                'name' => 'Командные',
                'description' => 'Задачи для команды'
            ],
            [
                'name' => 'Строронние',
                'description' => 'Задачи для сторонних организаций, не привязаных к аккаунту'
            ]
        ];
    }
}
