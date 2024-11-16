<?php

namespace Database\Factories;

use App\Models\Publicacion;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reaccion>
 */
class ReaccionFactory extends Factory
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
            'Reaccion' => $this->faker->boolean() ? 'MeGusta' : 'Default',
            'created_by' => 1
        ];
    }
}
