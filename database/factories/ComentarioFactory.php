<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Publicacion;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comentario>
 */
class ComentarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $User = User::inRandomOrder()->first()-> id;
        $Publicacion = Publicacion::inRandomOrder()->first()-> id;
        return [
            'IdUsuario' => $User,
            'IdPublicacion' => $Publicacion,
            'Comentario' => $this->faker->text(),
            'created_by' => 1
        ];
    }
}
