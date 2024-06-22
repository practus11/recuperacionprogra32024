<?php

namespace Database\Factories;

use App\Models\Libro;
use App\Models\TipoPasta;
use Illuminate\Database\Eloquent\Factories\Factory;

class LibroFactory extends Factory
{
    protected $model = Libro::class;

    public function definition()
    {
        return [
            'isbn' => $this->faker->isbn13,
            'titulo_libro' => $this->faker->sentence,
            'anio_publicacion' => $this->faker->year,
            'autor' => $this->faker->name,
            'clasificacion' => $this->faker->word,
            'cantidad_paginas' => $this->faker->numberBetween(100, 1000),
            'id_tipo_pasta' => TipoPasta::factory(), // Crea un tipo_pasta asociado
        ];
    }
}
