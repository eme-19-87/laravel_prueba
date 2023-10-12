<?php

namespace Database\Seeders;

use App\Models\Pet;
use App\Models\PetType;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();
        $petTypes = PetType::all();
        foreach ($users as $user) {
            Pet::factory(2)->create([
                'pet_type_id'=>$petTypes->first(),
                'user_id'=>$user->id
            ]);
        }
    }
}
