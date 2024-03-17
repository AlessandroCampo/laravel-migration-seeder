<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Factory as Faker;

class TrainsTableSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('it_IT');
        $stations = [
            'Roma Termini',
            'Milano Centrale',
            'Firenze Santa Maria Novella',
            'Napoli Centrale',
            'Torino Porta Nuova',
            'Venezia Santa Lucia',
            'Bologna Centrale',
            'Genova Piazza Principe',
            'Palermo Centrale',
            'Bari Centrale',
            'Catania Centrale',
            'Verona Porta Nuova',
            'Padova',
            'Trieste Centrale',
            'Trento',
            'Perugia Fontivegge',
            'Salerno',
            'Ancona',
            'Brescia',
            'Brindisi',
            'Cagliari',
            'Foggia',
            'Reggio Calabria Centrale',
            'Siracusa',
            'Taranto',
        ];;
        $providers = ['Italo', 'Trenitalia'];

        for ($i = 0; $i < 500; $i++) {
            $depDate = $faker->dateTimeBetween('now', '+1 month')->format('Y-m-d');
            Train::create([
                'provider' => $faker->randomElement($providers),
                'dep_station' => $faker->randomElement($stations),
                'arr_station' => $faker->randomElement($stations),
                'dep_time' => $faker->time('H:i'),
                'arr_time' => $faker->time('H:i'),
                'dep_date' => $depDate,
                'train_code' => $faker->unique()->randomNumber(5),
                'carriage_num' => $faker->numberBetween(1, 10),
                'on_time' => $faker->boolean(75),
                'cancelled' => $faker->boolean(10),
            ]);
        }
    }
}
