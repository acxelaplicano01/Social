<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Seguidor>
 */
class SeguidorFactory extends Factory
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
            'IdUsuarioSeguidor' => $User,
            'IdUsuarioSeguido' => $User,
            'created_by' => 1
        ];
    }
}
