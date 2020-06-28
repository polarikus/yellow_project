<?php

use Illuminate\Database\Seeder;
use App\Models\Team;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->data() as $types){
            Team::insert([
                'title' => $types['title'],
                'creator_id' => 1,
            ]);
        }
    }

    private function data(){
        return $data = [
            [
                'title' => 'Желтая команда',
            ],
            [
                'title' => 'Пурпурная команда',
            ],
            [
                'title' => 'Синяя команда',
            ],
            [
                'title' => 'Красная команда',
            ]
        ];
    }
}
