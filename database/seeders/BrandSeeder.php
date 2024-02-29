<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Brand;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 15; $i++) {
            $newBrand = new Brand();
            $newBrand->name = $faker->company;
            $newBrand->office_number = $faker->phoneNumber;
            $newBrand->email = $faker->email;
            $newBrand->office_address = $faker->address;
            $newBrand->website = $faker->url;
            $newBrand->save();
        }
    }
}
