<?php

namespace Database\Seeders;

use App\Models\Pet;
use App\Models\PetType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $petTypes = PetType::all();
        Pet::factory(5)->create([
            'pet_type_id'=>$petTypes->first()
        ]);
    }
}
