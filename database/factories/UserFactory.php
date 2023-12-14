<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = User::class;
    
    public function definition()
    {
        return [
            'nombre' => $this->faker->firstName,
            'apellido' => $this->faker->lastName,
            'user' => $this->faker->userName,
            'email' => $this->faker->unique()->safeEmail,
            'tipo_usuario' => $this->faker->randomElement(['3', '4']),
            'password' => bcrypt('password'), // Cambia esto según tus necesidades
            'estado' => $this->faker->randomElement(['activo', 'inactivo']),
          
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }    
}
