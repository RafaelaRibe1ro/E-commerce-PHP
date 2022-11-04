<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produto>
 */
class ProdutoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->word(),
            'descricao' => $this->faker->realText(50),
            'imagem' => $this->faker->imageUrl(),
            'preco' => $this->faker->numberBetween(1, 5000),
            'quantidade' => $this->faker->numberBetween(0, 50),
        ];
    }
}
