<?php

namespace App\Containers\AppSection\Examen\Data\Seeders;

use App\Containers\AppSection\Examen\Models\Examen;
use App\Ship\Parents\Seeders\Seeder as ParentSeeder;
use DB;

class ExamenUnidadSeeder_3 extends ParentSeeder
{

    public function run()
    {
        Examen::get()->each(function (Examen $examen) {
            $examen->unidads()->sync(
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
