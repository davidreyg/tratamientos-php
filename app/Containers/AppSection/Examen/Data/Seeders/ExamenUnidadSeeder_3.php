<?php

namespace App\Containers\AppSection\Examen\Data\Seeders;

use App\Containers\AppSection\Examen\Models\Examen;
use App\Containers\AppSection\Respuesta\Models\Respuesta;
use App\Ship\Parents\Seeders\Seeder as ParentSeeder;
use DB;

class ExamenUnidadSeeder_3 extends ParentSeeder
{

    public function run()
    {
        $numRespuestasAleatorias = 2; // Cambia el número según tus necesidades
        Examen::get()->each(function (Examen $examen) use ($numRespuestasAleatorias) {

            if ($examen->tipo === config('appSection-examen.tipos.unidad')) {
                $examen->unidads()->sync([
                    1 => [
                        'minimo' => fake()->randomFloat(2, 1, 10),
                        'maximo' => fake()->randomFloat(2, 10, 50),
                        'tipo' => config('appSection-unidad.tipos.multivalor')
                    ],
                    2 => [
                        'minimo' => fake()->randomFloat(2, 100, 110),
                        'maximo' => fake()->randomFloat(2, 150, 200),
                        'tipo' => config('appSection-unidad.tipos.multivalor')
                    ],
                ]);
            } else if ($examen->tipo === config('appSection-examen.tipos.respuesta')) {
                $respuestasAleatorias = Respuesta::inRandomOrder()->take($numRespuestasAleatorias)->get();
                $examen->respuestas()->sync($respuestasAleatorias);
            }

        });
    }
}
