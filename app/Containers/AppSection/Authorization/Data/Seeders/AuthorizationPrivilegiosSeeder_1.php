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
            'nombre' => 'Gestionar Diagnosticos',
            'icono' => 'fas fa-building-flag',
            // 'ruta' => '',
            // 'ruta' => '',

        ]);
        Privilegio::create([
            'nombre' => 'Registrar Triaje',
            'icono' => 'fas fa-stethoscope',
            'ruta' => '/triajes/registrar',
            'parent_id' => $modulo1->id,

        ]);
        Privilegio::create([
            'nombre' => 'Registrar Diagnostico',
            'icono' => 'fas fa-file-lines',
            'ruta' => '/diagnosticos/formulario',
            'parent_id' => $modulo1->id,

        ]);

        $modulo2 = Privilegio::create([
            'nombre' => 'Gestionar Laboratorio',
            'icono' => 'fas fa-vials',
            // 'ruta' => '',
            // 'ruta' => '',

        ]);
        Privilegio::create([
            'nombre' => 'Gestionar Orden',
            'icono' => 'fas fa-receipt',
            'ruta' => '/laboratorio/generar-orden',
            'parent_id' => $modulo2->id,

        ]);

        $modulo3 = Privilegio::create([
            'nombre' => 'Mantenimiento',
            'icono' => 'fas fa-screwdriver-wrench',
            // 'ruta' => '',
            // 'ruta' => '',

        ]);

        Privilegio::create([
            'nombre' => 'Diagnosticos',
            'icono' => 'fas fa-folder-open',
            'ruta' => '/diagnosticos',
            'parent_id' => $modulo3->id,

        ]);

        Privilegio::create([
            'nombre' => 'Tipo de Documento',
            'icono' => 'fas fa-address-card',
            'ruta' => '/tipo-documentos',
            'parent_id' => $modulo3->id,

        ]);

        Privilegio::create([
            'nombre' => 'Personal Administrativo',
            'icono' => 'fas fa-people-group',
            'ruta' => '/empleados',
            'parent_id' => $modulo3->id,

        ]);

        Privilegio::create([
            'nombre' => 'Roles',
            'icono' => 'fas fa-shield-halved',
            'ruta' => '/roles',
            'parent_id' => $modulo3->id,

        ]);
        Privilegio::create([
            'nombre' => 'Usuarios',
            'icono' => 'fas fa-user-gear',
            'ruta' => '/users',
            'parent_id' => $modulo3->id,

        ]);
    }
}
