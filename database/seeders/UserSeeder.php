<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>'TestName',
            'first_name'=>'TestFirstName',
            'last_name'=>'TestLastName',
            'phone'=>'12345',
            'email'=>'test@test.test',
            'password'=>Hash::make('testpassword'),
            'is_admin'=>true
        ]);
    }
}
