<?php

use Illuminate\Database\Seeder;
use App\Models\Status;

class StatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->data() as $statuses){
            Status::insert([
                'name' => $statuses['name'],
            ]);
        }
    }

    private function data(){
        return $data = [
            [
                'name' => 'Новый',
            ],
            [
                'name' => 'В работе',
            ],
            [
                'name' => 'В ожидании',
            ],
            [
                'name' => 'В очереди',
            ],
            [
                'name' => 'Выполнен',
            ],
            [
                'name' => 'Закрыт',
            ],

        ];
    }
}
