<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pet>
 */
class PetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $gender = ['male', 'female'];
        return [
            'name'=>fake()->name(),
            'breed'=>fake()->city()." Terrier",
            'age'=>rand(1, 20),
            'gender'=>$gender[rand(1, 2)-1],
            'features'=>fake()->words(3, true),
            'color'=>fake()->word(),
            'city'=>fake()->city(),
            'allergies'=>fake()->text(),
            // 'veterinarian'=>'null'
        ];
    }
}
