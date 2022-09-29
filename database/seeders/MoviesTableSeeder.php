<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie; //Pado 6

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        //Cree un ciclo for para llenar o crear 10 registros falsos aleatoriamente con $faker
        for ($i = 0; $i < 10; $i++) {
            $data = [
                'name' => $faker->name,
                'title' => $faker->sentence,
                'synopsis' => $faker->text,
                'year' => $faker->numberBetween(2000, 2022),
                'cover' => $faker->sentence,
            ]; 
            Movie::create($data);
        }

    }

}
