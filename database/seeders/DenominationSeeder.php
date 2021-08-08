<?php

namespace Database\Seeders;

use App\Models\Denomination;
use Illuminate\Database\Seeder;

class DenominationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Denomination::create([
            'type' => 'Billete',
            'value' => 2000
        ]);

        Denomination::create([
            'type' => 'Billete',
            'value' => 1000
        ]);

        Denomination::create([
            'type' => 'Billete',
            'value' => 5000
        ]);

        Denomination::create([
            'type' => 'Billete',
            'value' => 200
        ]);

        Denomination::create([
            'type' => 'Billete',
            'value' => 100
        ]);

        Denomination::create([
            'type' => 'Billete',
            'value' => 50
        ]);

        Denomination::create([
            'type' => 'Moneda',
            'value' => 25
        ]);

        Denomination::create([
            'type' => 'Moneda',
            'value' => 10
        ]);

        Denomination::create([
            'type' => 'Moneda',
            'value' => 5
        ]);

        Denomination::create([
            'type' => 'Otros',
            'value' => 0
        ]);
    }
}
