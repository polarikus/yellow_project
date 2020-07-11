<?php

use Illuminate\Database\Seeder;
use App\Models\User_Type;

class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->data() as $types){
            User_Type::insert([
                'name' => $types['title'],
            ]);
        }
    }

    private function data(){
        return $data = [
            [
                'title' => 'Исполнитель',
            ],
            [
                'title' => 'Наблюдатель',
            ],
            [
                'title' => 'Инициатор',
            ],
            [
                'title' => 'Участник задачи',
            ]
        ];
    }
}
