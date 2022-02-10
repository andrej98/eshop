<?php

use App\ProductSeeder;
use App\ImageSeeder;
use App\PaymentSeeder;
use App\DeliverySeeder;
use App\CategorySeeder;
use App\UserSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([CategorySeeder::class,ProductSeeder::class,ImageSeeder::class]);
        $this->call([PaymentSeeder::class,DeliverySeeder::class]);
        $this->call(UserSeeder::class);
    }
}
