<?php

namespace Database\Factories;

use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SiteContato>
 */
class SiteContatoFactory extends Factory
{
    use WithFaker;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nome' => fake()->name,
            'telefone' => fake()->tollFreePhoneNumber,
            'email' => fake()->unique()->email,
            'motivo_contato' => fake()->numberBetween(1, 3),
            'mensagem' => fake()->text(200)
        ];
    }
}
