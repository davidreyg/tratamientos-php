<?php

namespace App\Containers\AppSection\Persona\Data\Seeders;

use App\Containers\AppSection\Persona\Models\Persona;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Seeders\Seeder as ParentSeeder;

class PersonasSeeder_2 extends ParentSeeder
{

    /**
     * @throws CreateResourceFailedException
     */
    public function run(): void
    {
        Persona::factory()->count(50)->create();
    }
}
