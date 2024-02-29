<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Optional;

class OptionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $optionals = [
            [
                'name' => 'Sensore di movimento',
                'price' => '1200.00',
            ],
            [
                'name' => 'Cambio automatico',
                'price' => '799.90',
            ],
            [
                'name' => 'Luci led',
                'price' => '300.00',
            ],
            [
                'name' => 'Climatizzatore ultra V2',
                'price' => '223.43',
            ],
            [
                'name' => 'Sistema di navigazione GPS',
                'price' => '149.99',
            ],
            [
                'name' => 'Telecamera per retromacia a 360 gradi',
                'price' => '399.90',
            ],
            [
                'name' => 'Sedili riscaldabili',
                'price' => '799.99',
            ],
        ];

        foreach ($optionals as $optional) {
            $new_optional = new Optional();
            $new_optional->name = $optional['name'];
            $new_optional->price = $optional['price'];
            $new_optional->save();
        }
    }
}
