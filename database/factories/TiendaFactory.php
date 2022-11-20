<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tienda>
 */
class TiendaFactory extends Factory
{
    /**
     *  $table->string('email');
           * $table->string('telefono')->nullable();
           *$table->boolean('estado');
            *$table->string('ciudad');
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'email'=>fake()->email(),
            'telefono'=>$this->faker->phoneNumber(),
            'estado' =>$this->faker->boolean,
            'ciudad'=>fake()->city(),
        ];
    }
}
