<?php

use Illuminate\Database\Seeder;

use Faker\Generator as Faker;
use App\Travel;

class TravelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 100; $i++){
            $travel = new Travel();
            $travel-> luogo = $faker->firstName();
            $travel-> lingua_locale = $faker->firstName();
            $travel-> anno = $faker->firstName();

            $travel->save();
        }
    }
}
