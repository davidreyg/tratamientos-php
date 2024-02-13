<?php

namespace App\Containers\AppSection\Authorization\Actions;

use App\Containers\AppSection\Authorization\Models\Role;
use App\Containers\AppSection\Authorization\Tasks\FindPermissionTask;
use App\Containers\AppSection\Authorization\Tasks\FindRoleTask;
use App\Containers\AppSection\Authorization\UI\API\Requests\AttachPrivilegiosToRoleRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class AttachPrivilegiosToRoleAction extends ParentAction
{
    public function __construct(
        private readonly FindRoleTask $findRoleTask,
        private readonly FindPermissionTask $findPermissionTask,
    ) {
    }

    /**
     * @throws NotFoundException
     */
    public function run(AttachPrivilegiosToRoleRequest $request): Role
    {
        $role = $this->findRoleTask->run($request->id);

        $privilegiosIds = (array) $request->privilegios_ids;
        $role->privilegios()->sync($privilegiosIds);

        return $role;
    }
}
