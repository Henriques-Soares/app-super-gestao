<?php

namespace Database\Factories;

use App\Models\SiteContacto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SiteContacto>
 */
class SiteContactoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = SiteContacto::class;
    
    public function definition()
    {
        return [
            //criado na aula 119 factories
            'nome'=> fake()->name(),
            'telefone' => fake()->tollFreePhoneNumber(),
            'email' => fake()->email(),
            'motivo_contacto' => fake()->numberBetween(1,3),
            'mensagem' => fake()->sentence(4)
        ];
    }
}
