<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use faker\Generator as Faker;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = User::class;

    public function withFaker()
    {
        return \Faker\Factory::create('pt_BR');
    }

    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            // 'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'phone' => $this->faker->cellphoneNumber(),
            'cpf' => $this->faker->cpf(false),
            'street' => $this->faker->streetName(),
            'cep' => $this->faker->randomNumber(8),
            'neighbor' => $this->faker->text(10),
            'number' => $this->faker->randomNumber(3),
            'city' => $this->faker->city(),
            'state' => $this->faker->state(),
            'complement' => $this->faker->text(30),
            // 'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
