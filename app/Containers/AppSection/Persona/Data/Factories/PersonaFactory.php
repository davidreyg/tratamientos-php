<?php

namespace App\Containers\AppSection\Persona\Data\Factories;

use App\Containers\AppSection\Persona\Models\Persona;
use App\Ship\Parents\Factories\Factory as ParentFactory;

class PersonaFactory extends ParentFactory
{
    protected $model = Persona::class;

    public function definition(): array
    {
        return [
            // Add your model fields here
            'nombre' => $this->faker->name(),
            'apellido_paterno' => $this->faker->lastName(),
            'apellido_materno' => $this->faker->lastName(),
            'numero_documento' => $this->faker->randomNumber(9, true),
            'fecha_nacimiento' => now(),
            'edad' => $this->faker->numberBetween(10, 80),
            'sexo' => $this->faker->randomElement(['Masculino', 'Femenino']),
            'direccion' => 'SIn calle',
            'telefono' => $this->faker->randomNumber(9, true),
            'historia_clinica' => $this->faker->randomNumber(6, true),
        ];
    }
}
