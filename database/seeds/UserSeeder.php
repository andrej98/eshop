<?php
namespace App;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@admin.sk',
            //'email_verified_at' => 0,
            'birth_date' => '05 Dec 2000',
            'password' => Hash::make('admin'),
            'address' => 'address',
            'phone' => '999',
            'admin' => 1,
            'api_token' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'
        ]);
    }
}
