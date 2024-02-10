<?php

namespace App\Containers\AppSection\Authorization\Data\Seeders;

use App\Containers\AppSection\Authorization\Models\Privilegio;
use App\Containers\AppSection\Authorization\Tasks\GetAllPermissionsTask;
use App\Ship\Parents\Seeders\Seeder as ParentSeeder;

class AuthorizationGivePrivilegiosToRolesSeeder_3 extends ParentSeeder
{
    public function __construct(
        private readonly GetAllPermissionsTask $getAllPermissionsTask
    ) {
    }

    public function run(): void
    {
        // Give all permissions to 'admin' role on all Guards ----------------------------------------------------------------
        $adminRoleName = config('appSection-authorization.admin_role');
        $roleModel = config('permission.models.role');
        // foreach (array_keys(config('auth.guards')) as $guardName) {
        $allPrivilegios = Privilegio::all();
        $adminRole = $roleModel::findByName($adminRoleName, 'api');
        $adminRole->privilegios()->sync($allPrivilegios);
        // }

        // Give permissions to roles ----------------------------------------------------------------
        //
    }
}
