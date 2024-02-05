<?php

namespace App\Containers\AppSection\Authorization\Data\Seeders;

use App\Containers\AppSection\User\Actions\CreateAdminAction;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Seeders\Seeder as ParentSeeder;

class AuthorizationDefaultUsersSeeder_4 extends ParentSeeder
{
    public function __construct(
        private readonly CreateAdminAction $createAdminAction
    ) {
    }

    /**
     * @throws CreateResourceFailedException
     * @throws \Throwable
     */
    public function run(): void
    {
        // Default Users (with their roles) ---------------------------------------------
        $this->createSuperAdmin();
    }

    /**
     * @throws CreateResourceFailedException
     * @throws \Throwable
     */
    private function createSuperAdmin(): void
    {
        $userData = [
            'establecimiento_id' => 1,
            'password' => 'admin',
            'name' => 'admin',
            'nombre_completo' => 'Gilbert Gil Gutierrez Luyo',
            'cargo' => 'Ingeniero de Sistemas',
        ];

        $this->createAdminAction->run($userData);
    }
}
