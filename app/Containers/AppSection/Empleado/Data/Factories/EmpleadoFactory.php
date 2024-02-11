<?php

namespace App\Containers\AppSection\Empleado\Data\Factories;

use App\Containers\AppSection\Empleado\Models\Empleado;
use App\Containers\AppSection\TipoDocumento\Models\TipoDocumento;
use App\Ship\Parents\Factories\Factory as ParentFactory;

class EmpleadoFactory extends ParentFactory
{
    protected $model = Empleado::class;

    public function definition(): array
    {
        return [
            // Add your model fields here
            'nombres' => $this->faker->firstName(),
            'apellido_paterno' => $this->faker->lastName(),
            'apellido_materno' => $this->faker->lastName(),
            'numero_documento' => $this->faker->randomNumber(9, true),
            'fecha_nacimiento' => now(),
            'edad' => $this->faker->numberBetween(10, 80),
            'sexo' => $this->faker->randomElement(['Masculino', 'Femenino']),
            'direccion' => $this->faker->streetAddress(),
            'telefono' => $this->faker->randomNumber(9, true),
            // 'historia_clinica' => $this->faker->randomNumber(6, true),
            'tipo_documento_id' => TipoDocumento::inRandomOrder()->value('id'),
        ];
    }

    public function medico($establecimiento_id): static
    {
        return $this->state(function (array $attributes) use ($establecimiento_id) {
            return [
                // Add your model fields here
                'nombres' => $this->faker->firstName(),
                'apellido_paterno' => $this->faker->lastName(),
                'apellido_materno' => $this->faker->lastName(),
                'numero_documento' => $this->faker->randomNumber(9, true),
                'fecha_nacimiento' => now(),
                'edad' => $this->faker->numberBetween(10, 80),
                'sexo' => $this->faker->randomElement(['Masculino', 'Femenino']),
                'direccion' => $this->faker->streetAddress(),
                'telefono' => $this->faker->randomNumber(9, true),
                // 'historia_clinica' => $this->faker->randomNumber(6, true),
                'tipo_documento_id' => TipoDocumento::inRandomOrder()->value('id'),
                'cargo_id' => 1,
                'establecimiento_id' => $establecimiento_id,
            ];
        });

    }
}
