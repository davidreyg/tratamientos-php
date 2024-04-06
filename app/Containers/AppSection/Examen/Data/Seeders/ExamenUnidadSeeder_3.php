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
            $opcionAleatoria = random_int(0, 1); // Genera un número aleatorio entre 0 y 1

            if ($examen->tipo === config('appSection-examen.tipos.unidad')) {
                $examen->unidads()->sync([
                    1 => [
                        'minimo' => fake()->randomFloat(2, 1, 10),
                        'maximo' => fake()->randomFloat(2, 10, 50)
                    ],
                    2 => [
                        'minimo' => fake()->randomFloat(2, 100, 110),
                        'maximo' => fake()->randomFloat(2, 150, 200)
                    ],
                ]);
            } else if ($examen->tipo === config('appSection-examen.tipos.respuesta')) {
                $respuestasAleatorias = Respuesta::inRandomOrder()->take($numRespuestasAleatorias)->get();
                $examen->respuestas()->sync($respuestasAleatorias);
            }

        });
    }
}
