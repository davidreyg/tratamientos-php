<?php

namespace App\Containers\AppSection\Authorization\UI\API\Controllers;

use App\Containers\AppSection\Authorization\Actions\GetRolePrivilegiosAction;
use App\Containers\AppSection\Authorization\UI\API\Requests\GetRolePrivilegiosRequest;
use App\Containers\AppSection\Authorization\UI\API\Transformers\PrivilegioTransformer;
use App\Ship\Parents\Controllers\ApiController;

class GetRolePrivilegiosController extends ApiController
{
    public function __construct(
        private readonly GetRolePrivilegiosAction $getRolePrivilegiosAction
    ) {
    }

    public function __invoke(GetRolePrivilegiosRequest $request): array
    {
        $permission = $this->getRolePrivilegiosAction->run($request);

        return $this->transform($permission, PrivilegioTransformer::class);
    }
}
