<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function withFaker()
    {
        return \Faker\Factory::create('pt_BR');
    }
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->email(),
            'phone' => $this->faker->phoneNumber(),
            'dt_birth' => $this->faker->date('d_m_y'),
            'cep' => $this->faker->postcode(),
            'city' => $this->faker->city(),
            'uf' => $this->faker->state(),
            'district' => $this->faker->streetName(),
            'street' => $this->faker->streetAddress(),
            'number' => $this->faker->buildingNumber()
        ];
    }
}
