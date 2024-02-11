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
            'ruta' => 'diagnosticos.registrar',
            'parent_id' => $modulo1->id,

        ]);
        Privilegio::create([
            'nombre' => 'Reportes',
            'icono' => 'fas fa-chart-pie',
            // 'ruta' => '',
            // 'ruta' => '',

        ]);

        $modulo3 = Privilegio::create([
            'nombre' => 'Mantenimiento',
            'icono' => 'fas fa-screwdriver-wrench',
            // 'ruta' => '',
            // 'ruta' => '',

        ]);

        Privilegio::create([
            'nombre' => 'Tipo de Documento',
            'icono' => 'fas fa-address-card',
            'ruta' => 'tipo-documentos.index',
            'parent_id' => $modulo3->id,

        ]);

        Privilegio::create([
            'nombre' => 'Personal Administrativo',
            'icono' => 'fas fa-people-group',
            'ruta' => 'empleados.index',
            'parent_id' => $modulo3->id,

        ]);

        Privilegio::create([
            'nombre' => 'Roles',
            'icono' => 'fas fa-shield-halved',
            'ruta' => 'roles.index',
            'parent_id' => $modulo3->id,

        ]);



    }
}
