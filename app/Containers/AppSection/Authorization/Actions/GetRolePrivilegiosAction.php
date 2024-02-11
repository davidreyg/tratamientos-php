<?php

namespace App\Containers\AppSection\Authorization\Actions;

use App\Containers\AppSection\Authorization\Tasks\FindRoleTask;
use App\Containers\AppSection\Authorization\UI\API\Requests\GetRolePrivilegiosRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class GetRolePrivilegiosAction extends ParentAction
{
    public function __construct(
        private readonly FindRoleTask $findRoleTask
    ) {
    }

    /**
     * @throws NotFoundException
     */
    public function run(GetRolePrivilegiosRequest $request): mixed
    {
        $role = $this->findRoleTask->run($request->id);

        return $role->privilegios;
    }
}
