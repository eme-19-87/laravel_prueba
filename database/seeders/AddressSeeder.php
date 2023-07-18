<?php

namespace Database\Seeders;

use App\Models\Address;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Address::create([
            'street'=>'Test Street',
            'number'=>'126',
            'details'=>'Test Details',
            'user_id'=>1,
        ]);
    }
}
