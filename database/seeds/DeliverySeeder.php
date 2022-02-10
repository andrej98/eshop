<?php

namespace App;
use Illuminate\Database\Seeder;

class DeliverySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Delivery::create([
            'name' => 'Kuriér',
            'price' => 5,
            'icon' => 'icons/kurier.svg'
        ]);

        Delivery::create([
            'name' => 'Osobný odber',
            'price' => 0,
            'icon' => 'icons/osobny-odber.svg'
        ]);
    }
}
