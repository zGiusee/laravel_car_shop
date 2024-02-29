<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Brand;
use Faker\Factory as Faker;

class BrandSeeder extends Seeder
{
  
public function run()
{
    $faker = Faker::create();

    for ($i = 0; $i < 10; $i++) { 
        Brand::create([
            'name' => $faker->company,
            'office_number' => $faker->phoneNumber,
            'email' => $faker->companyEmail,
            'website' => $faker->url,
            'office_address' => $faker->address,
            
        ]);
    }
}
}


