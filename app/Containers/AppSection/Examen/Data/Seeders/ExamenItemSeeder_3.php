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
                'codigo' => 200,
                'nombre' => 'Examen Completo de Orina',
                'precio' => '135',
                'categoria_id' => 1,
                'is_active' => 1,
            ]
        );
        $seccion = Seccion::create(['nombre' => 'Microbiologia']);

        $examen2 = Examen::create(
            [
                'codigo' => 300,
                'nombre' => 'Hemoglobina completo',
                'precio' => '137',
                'categoria_id' => 1,
                'is_active' => 1,
            ]
        );
        Item::create([
            'codigo' => 20001,
            'nombre' => 'PH',
            'seccion_id' => $seccion->id,
            'examen_id' => $examen->id
        ]);
        Item::create([
            'codigo' => 20002,
            'nombre' => 'Densidad',
            'seccion_id' => $seccion->id,
            'examen_id' => $examen->id
        ]);
        Item::create([
            'codigo' => 20003,
            'nombre' => 'Color',
            'seccion_id' => $seccion->id,
            'examen_id' => $examen->id
        ]);
        Item::create([
            'codigo' => 20004,
            'nombre' => 'Aspecto',
            'seccion_id' => $seccion->id,
            'examen_id' => $examen->id
        ]);

        Item::create([
            'codigo' => 30001,
            'nombre' => 'No se',
            'seccion_id' => $seccion->id,
            'examen_id' => $examen2->id
        ]);
        Item::create([
            'codigo' => 30002,
            'nombre' => 'Ph',
            'seccion_id' => $seccion->id,
            'examen_id' => $examen2->id
        ]);

        Item::get()->each(function (Item $item) {
            $item->unidads()->sync(
                [
                    1 => [
                        'minimo' => fake()->randomFloat(2, 1, 10),
                        'maximo' => fake()->randomFloat(2, 10, 50)
                    ],
                    2 => [
                        'minimo' => fake()->randomFloat(2, 100, 110),
                        'maximo' => fake()->randomFloat(2, 150, 200)
                    ],
                ]
            );
        });
    }
}
