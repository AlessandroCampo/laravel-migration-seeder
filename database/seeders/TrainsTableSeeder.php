<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $trains = [
            [
                'provider' => 'Trenitalia',
                'dep_station' => 'Roma Termini',
                'arr_station' => 'Milano Centrale',
                'dep_time' => '08:00:00',
                'arr_time' => '12:30:00',
                'dep_date' => '2024-03-20',
                'train_code' => 1234,
                'carriage_num' => 8,
                'on_time' => true,
                'cancelled' => false,
            ],
            [
                'provider' => 'Italo',
                'dep_station' => 'Firenze Santa Maria Novella',
                'arr_station' => 'Napoli Centrale',
                'dep_time' => '10:30:00',
                'arr_time' => '13:45:00',
                'dep_date' => '2024-03-21',
                'train_code' => 5678,
                'carriage_num' => 6,
                'on_time' => true,
                'cancelled' => false,
            ],
            [
                'provider' => 'Trenord',
                'dep_station' => 'Milano Cadorna',
                'arr_station' => 'Como Lago',
                'dep_time' => '15:15:00',
                'arr_time' => '16:00:00',
                'dep_date' => '2024-03-22',
                'train_code' => 91011,
                'carriage_num' => 4,
                'on_time' => true,
                'cancelled' => false,
            ],
        ];
        foreach ($trains as $trainData) {
            $newTrain = new Train();
            $newTrain->provider = $trainData['provider'];
            $newTrain->dep_station = $trainData['dep_station'];
            $newTrain->arr_station = $trainData['arr_station'];
            $newTrain->dep_time = $trainData['dep_time'];
            $newTrain->arr_time = $trainData['arr_time'];
            $newTrain->dep_date = $trainData['dep_date'];
            $newTrain->train_code = $trainData['train_code'];
            $newTrain->carriage_num = $trainData['carriage_num'];
            $newTrain->on_time = $trainData['on_time'];
            $newTrain->cancelled = $trainData['cancelled'];
            $newTrain->save();
        }
    }
}
