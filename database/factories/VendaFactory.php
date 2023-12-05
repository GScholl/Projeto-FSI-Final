<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Cliente;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Venda>
 */
class VendaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'titulo' => "Compras Aleatórias",
            "descricao" => "Foi comprado Coisas",
            'cliente_id' => Cliente::inRandomOrder()->first()->id,
            'data_compra' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'valor' => $this->faker->randomFloat(2, 10, 1000),
            'status' => $this->faker->randomElement(['F']),
        ];
    }
}

