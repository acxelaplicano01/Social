<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Publicacion>
 */
class PublicacionFactory extends Factory
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
            'Contenido' => $this->faker->text(200),
            'Imagen' => $this->faker->imageUrl(),
            'created_by' => 1
        ];
    }
}
