<?php

namespace App;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            Category::create([
                'category_name' => 'Mobilné telefóny',
                'description' => 'Tie najlepšie mobilné telefóny na jednom mieste'
            ]);

            Category::create([
                'category_name' => 'Notebooky',
                'description' => 'Tie najlepšie notebooky na jednom mieste'
            ]);
            Category::create([
                'category_name' => 'Príslušenstvo',
                'description' => 'Všetko čo potrebujete na jednom mieste'
            ]);
        }
    }
}
