<?php

namespace App\Containers\AppSection\Diagnostico\Data\Factories;

use App\Containers\AppSection\Diagnostico\Models\Diagnostico;
use App\Containers\AppSection\Establecimiento\Models\Establecimiento;
use App\Containers\AppSection\Financiamiento\Models\Financiamiento;
use App\Containers\AppSection\Persona\Models\Persona;
use App\Ship\Parents\Factories\Factory as ParentFactory;

class DiagnosticoFactory extends ParentFactory
{
    protected $model = Diagnostico::class;

    public function definition(): array
    {
        return [
            // Add your model fields here
            'descripcion' => $this->faker->words(3),
            // 'fecha' => now(),
            'observaciones' => $this->faker->words(3),
            'establecimento_id' => Establecimiento::inRandomOrder()->value('id'),
            'paciente_id' => Persona::inRandomOrder()->value('id'),
            'medico_id' => Persona::inRandomOrder()->value('id'),
            'financiamiento_id' => Financiamiento::inRandomOrder()->value('id'),
        ];
    }
}
