<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Fpaipl\Authy\Models\Address;

class AddressSeeder extends Seeder
{
    public function run(): void
    {
        Address::create([
            'user_id' => 1,
            'print' => 'Fashion Pashion, 4645644567, B-74 Okhla Okhla New Delhi India 110086', 
            'fname' => 'Fashion',
            'lname' => 'Pashion',
            'contact_no' => '4645644567',
            'line1' => 'B-74',
            'line2' => 'Okhla',
            'district' => 'Okhla',
            'state' => 'New Delhi',
            'country' => 'India',
            'pincode' => '110086',
        ]);
    }
}