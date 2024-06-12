<?php

namespace Database\Seeders;
use App\Models\Train;
use Faker;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
 /**
     * Run the database seeds.
     */
    public function run(): void {
        $faker = Faker\Factory::create('it_IT');
        
        for ($i = 0; $i < 10; $i++) {
            $newTrain = new Train();
            $newTrain->azienda = $faker->company();
            $newTrain->data_di_partenza = $faker->dateTime('+3 weeks');
            $newTrain->stazione_di_partenza = $faker->city();
            $newTrain->stazione_di_arrivo = $faker->city();
            $newTrain->orario_di_partenza = $faker->time();
            $newTrain->orario_di_arrivo = $faker->time();
            $newTrain->codice_treno = $faker->randomLetter();
            $newTrain->numero_carrozze = $faker->numberBetween(1, 20);
            $newTrain->in_orario = $faker->boolean();
            $newTrain->cancellato = $faker->boolean();
            $newTrain->save(); // Qui salviamo i dati nel database
        }
    }
}