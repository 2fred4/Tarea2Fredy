<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * $table->string('nombre_producto');
           * $table->string('marca');
          *  $table->string('isbn');
           * $table->text('descripcion_producto');
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre_producto'=>fake()->name(),
            'marca'=>fake()->word(),
            'descripcion_producto'=>fake()->paragraph(),
        ];
    }
}
