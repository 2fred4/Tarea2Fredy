<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     * 
     */
    /*
            $table->string('dni');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('ciudad');
            $table->string('telefono')->nullable();
            
    */
    public function definition()
    {
        return [
           'dni'=>$this->faker->numerify('####-').$this->faker ->numberBetween(1990,2005).$this->faker->numerify('-#####'),
           'nombre'=>$this->faker->firstName(),
           'apellido'=>$this->faker->lastName(),
           'ciudad'=>$this->faker->city(),
           'telefono'=>$this->faker->phoneNumber(),
           'monto'=>$this->faker->numberBetween(1000, 20000)
           
        
        ];
    }
}
