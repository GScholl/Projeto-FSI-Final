<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' => fake()->name(),
            'sobrenome' => fake()->name(),
            'cpf' => "12093810323",
            'data_cadastro' => $this->faker->dateTimeBetween('-1 year', 'now'),
            "email" => fake()->email()
        ];
    }
}
