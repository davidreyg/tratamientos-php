<?php

namespace App\Containers\AppSection\Respuesta\Data\Seeders;

use App\Ship\Parents\Seeders\Seeder as ParentSeeder;
use DB;

class RespuestaSeeder_2 extends ParentSeeder
{
    public function run()
    {
        DB::insert('insert into respuestas (nombre) values (?)', ['HAY REACCION']);
        DB::insert('insert into respuestas (nombre) values (?)', ['NO SE OBSERVA REACCION']);
        DB::insert('insert into respuestas (nombre) values (?)', ['POSITIVO']);
        DB::insert('insert into respuestas (nombre) values (?)', ['NEGATIVO']);
    }
}
