<?php

namespace App\Containers\AppSection\Examen\Data\Seeders;

use App\Containers\AppSection\Examen\Models\Examen;
use App\Containers\AppSection\Item\Models\Item;
use App\Containers\AppSection\Item\Models\Seccion;
use App\Ship\Parents\Seeders\Seeder as ParentSeeder;

class ExamenItemSeeder_3 extends ParentSeeder
{

    public function run()
    {
        $examen = Examen::create(
            [
                'nombre' => 'Examen Completo de Orina',
                'precio' => '135',
                'categoria_id' => 1,
                'is_active' => 1,
            ]
        );
        $seccion = Seccion::create(['nombre' => 'Microbiologia']);
        $item = Item::create(['nombre' => 'PH', 'seccion_id' => $seccion->id]);

        $examen->items()->sync([$item->id]);
    }
}
