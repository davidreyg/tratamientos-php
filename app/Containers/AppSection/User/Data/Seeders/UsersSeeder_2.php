<?php

namespace App\Containers\AppSection\User\Data\Seeders;

use App\Containers\AppSection\User\Models\User;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Seeders\Seeder as ParentSeeder;

class UsersSeeder_2 extends ParentSeeder
{
    /**
     * @throws CreateResourceFailedException
     */
    public function run(): void
    {
        User::factory()->count(20)->create()->each(function ($user) {
            // Asignar un rol a cada usuario creado
            $user->assignRole('medico');
        });
    }
}
