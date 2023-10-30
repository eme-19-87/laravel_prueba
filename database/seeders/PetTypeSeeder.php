<?php

namespace Database\Seeders;

use App\Models\PetType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PetTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PetType::create([
            'name'=>'dog',
            'description' => 'Mamífero. Carnívoro/Omnivoro. Sociable que vive en manadas'
        ]);
        PetType::create([
            'name'=>'cat',
            'description' => 'Mamífero. Carnívoro. Solitario'
        ]);
        PetType::create([
            'name'=>'turtle',
            'description' => 'Reptil. Omnívoro. Solitario'
        ]);
    }
}
