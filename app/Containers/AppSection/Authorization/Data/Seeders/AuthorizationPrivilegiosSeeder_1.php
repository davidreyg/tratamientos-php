<?php

namespace App\Containers\AppSection\Authorization\Data\Seeders;

use App\Containers\AppSection\Authorization\Models\Privilegio;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Seeders\Seeder as ParentSeeder;

class AuthorizationPrivilegiosSeeder_1 extends ParentSeeder
{

    /**
     * @throws CreateResourceFailedException
     */
    public function run(): void
    {
        $modulo1 = Privilegio::create([
            'nombre' => 'Gestionar establecimiento',
            'icono' => 'fas fa-building-flag',
            // 'ruta' => '',
            // 'ruta' => '',

        ]);
        Privilegio::create([
            'nombre' => 'Registrar Diagnostico',
            'icono' => 'fas fa-file-lines',
            'ruta' => 'diagnosticos.',
            'parent_id' => $modulo1->id,

        ]);
        $modulo2 = Privilegio::create([
            'nombre' => 'Reportes',
            'icono' => 'fas fa-chart-pie',
            // 'ruta' => '',
            // 'ruta' => '',

        ]);
        Privilegio::create([
            'nombre' => 'Tipo de Documento',
            'icono' => 'fas fa-address-card',
            'ruta' => 'diagnosticos.',
            'parent_id' => $modulo2->id,

        ]);
        Privilegio::create([
            'nombre' => 'Mantenimiento',
            'icono' => 'fas fa-building-flag',
            // 'ruta' => '',
            // 'ruta' => '',

        ]);




    }
}
