<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Car;
use Faker\Factory as Faker;



class CarSeeder extends Seeder
{
  
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 25; $i++) { 
            Car::create([
                'price' => $faker->numberBetween(10000, 50000),
                'model' => $faker->sentence(3),
                'km' => $faker->optional(0.5)->numberBetween(0, 100000),
                'img' => $faker->optional(0.5)->imageUrl(200, 200, 'cars'),
                'immatricolation_year' => $faker->optional(0.5)->numberBetween(2010, 2022),
                'plate' => $faker->unique()->regexify('[A-Z]{3}[0-9]{4}'),
                'year' => $faker->numberBetween(2010, 2022),
                'color' => $faker->safeColorName(),
                'fuel_type' => $faker->randomElement(['Gasoline', 'Diesel', 'Electric']),
                'used' => $faker->boolean(),
                'description' => $faker->optional(0.5)->paragraph(),
                'seats' => $faker->numberBetween(2, 7),
                'transmission' => $faker->randomElement(['Manual', 'Automatic']),
                'owners' => $faker->numberBetween(0, 3),
                'engine_size' => $faker->numberBetween(1000, 5000),
                'power' => $faker->numberBetween(80, 400) . ' hp',
                'paint_type' => $faker->optional(0.5)->randomElement(['Metallic', 'Solid']),
                'material_type' => $faker->optional(0.5)->randomElement(['Leather', 'Fabric', 'Alcantara']),
            ]);
        }
    }
}
