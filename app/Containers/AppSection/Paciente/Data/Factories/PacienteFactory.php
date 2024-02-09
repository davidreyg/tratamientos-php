<?php

namespace App\Containers\AppSection\Paciente\Data\Factories;

use App\Containers\AppSection\Paciente\Models\Paciente;
use App\Containers\AppSection\TipoDocumento\Models\TipoDocumento;
use App\Ship\Parents\Factories\Factory as ParentFactory;

class PacienteFactory extends ParentFactory
{
    protected $model = Paciente::class;

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
            'historia_clinica' => $this->faker->randomNumber(6, true),
            'tipo_documento_id' => TipoDocumento::inRandomOrder()->value('id'),
        ];
    }
}
