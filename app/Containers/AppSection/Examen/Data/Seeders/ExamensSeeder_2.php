<?php

namespace App\Containers\AppSection\Examen\Data\Seeders;

use App\Ship\Parents\Seeders\Seeder as ParentSeeder;
use DB;

class ExamensSeeder_2 extends ParentSeeder
{

    public function run()
    {
        $sqlFile = app_path('Containers/AppSection/Examen/Data/ExamenesLab.sql');
        if (file_exists($sqlFile)) {
            $sql = file_get_contents($sqlFile);
            DB::unprepared($sql);
        }
    }
}
