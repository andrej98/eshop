<?php

namespace App;
use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Payment::create([
            'name' => 'Platba kartou',
            'price' => 0,
            'icon' => 'icons/karta.svg'
        ]);

        Payment::create([
            'name' => 'Hotovosť',
            'price' => 1,
            'icon' => 'icons/hotovost.svg'
        ]);
    }
}
