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
                'status_name' => $statuses['status_name'],
                'is_stop_time' => $statuses['is_stop_time'],
            ]);
        }
    }

    private function data(){
        return $data = [
            [
                'status_name' => 'Новый',
                'is_stop_time' => false
            ],
            [
                'status_name' => 'В работе',
                'is_stop_time' => false
            ],
            [
                'status_name' => 'В ожидании',
                'is_stop_time' => true
            ],
            [
                'status_name' => 'В очереди',
                'is_stop_time' => true
            ],
            [
                'status_name' => 'Выполнен',
                'is_stop_time' => true
            ],
            [
                'status_name' => 'Закрыт',
                'is_stop_time' => true
            ],

        ];
    }
}
