<?php

namespace App\Containers\AppSection\Authorization\UI\API\Controllers;

use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Authorization\Actions\AttachPermissionsToRoleAction;
use App\Containers\AppSection\Authorization\Actions\AttachPrivilegiosToRoleAction;
use App\Containers\AppSection\Authorization\UI\API\Requests\AttachPermissionsToRoleRequest;
use App\Containers\AppSection\Authorization\UI\API\Requests\AttachPrivilegiosToRoleRequest;
use App\Containers\AppSection\Authorization\UI\API\Transformers\RoleTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\ApiController;

class AttachPrivilegiosToRoleController extends ApiController
{
    public function __construct(
        private readonly AttachPrivilegiosToRoleAction $attachPrivilegiosToRoleAction
    ) {
    }

    /**
     * @throws InvalidTransformerException
     * @throws NotFoundException
     */
    public function __invoke(AttachPrivilegiosToRoleRequest $request): array
    {
        $role = $this->attachPrivilegiosToRoleAction->run($request);

        return $this->transform($role, RoleTransformer::class);
    }
}
