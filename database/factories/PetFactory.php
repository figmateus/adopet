<?php

namespace Database\Factories;

use App\Models\Pet;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pet>
 */
class PetFactory extends Factory
{
    protected $model = Pet::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $gender = $this->faker->randomElement(['masculino', 'feminino']);
        return [
            'status' => 'adoção',
            'pet_owner_id' => 1,
            'name' => $this->faker->text('5'),
            'age' => $this->faker->randomNumber(1),
            'personality' => $this->faker->text(10),
            'gender' => $gender,
            'inters'
        ];
    }
}
