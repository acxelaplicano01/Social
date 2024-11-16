<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MensajesPrivados>
 */
class MensajePrivadoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $User = User::inRandomOrder()->first()-> id;
        return [
            'IdUsuario' => $User,
            'IdUsuarioDestino' => $User,
            'Mensaje' => $this->faker->text(200),
            'Leido' => $this->faker->randomElement(['0', '1']),
            'created_by' => 1
        ];
    }
}
