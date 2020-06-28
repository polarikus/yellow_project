<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->data() as $datum){
            App\Models\Role::create($datum);
        }
    }

    private function data(){
        return $data = [
            [
                'role_name' => 'Администратор',
            ],
            [
                'role_name' => 'Пользователь',
            ],
            [
                'role_name' => 'Тим-лид',
            ]
        ];
    }
}
