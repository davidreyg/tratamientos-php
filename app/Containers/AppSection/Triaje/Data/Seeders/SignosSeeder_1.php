<?php

namespace App\Containers\AppSection\Triaje\Data\Seeders;

use App\Containers\AppSection\Triaje\Models\Signo;
use App\Ship\Parents\Seeders\Seeder as ParentSeeder;

class SignosSeeder_1 extends ParentSeeder
{

    public function run(): void
    {
        Signo::create(['nombre' => 'Temperatura', 'codigo' => 'codigo1', 'unidad' => '°C']);
        Signo::create(['nombre' => 'Presion Arterial sis', 'codigo' => 'codigo2', 'unidad' => 'xmmhg']);
        Signo::create(['nombre' => 'Presion Arterial dias', 'codigo' => 'codigo3', 'unidad' => 'xmmhg']);
        Signo::create(['nombre' => 'Saturacion', 'codigo' => 'codigo4', 'unidad' => '%']);
        Signo::create(['nombre' => 'Frecuencia Cardiaca', 'codigo' => 'codigo5', 'unidad' => 'x min']);
        Signo::create(['nombre' => 'Frecuencia Respiratoria', 'codigo' => 'codigo6', 'unidad' => 'x min']);
        Signo::create(['nombre' => 'Peso', 'codigo' => 'codigo7', 'unidad' => 'Kg']);
        Signo::create(['nombre' => 'Talla', 'codigo' => 'codigo8', 'unidad' => 'm']);
        Signo::create(['nombre' => 'Perimetro Abdominal', 'codigo' => 'codigo9', 'unidad' => 'cm']);
    }
}
