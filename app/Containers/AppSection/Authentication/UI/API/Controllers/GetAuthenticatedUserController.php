<?php

namespace App\Containers\AppSection\Authentication\UI\API\Controllers;

use App\Containers\AppSection\Authentication\Actions\GetAuthenticatedUserAction;
use App\Containers\AppSection\Authorization\UI\API\Transformers\PrivilegioTransformer;
use App\Containers\AppSection\Authorization\UI\API\Transformers\RoleTransformer;
use App\Containers\AppSection\Establecimiento\UI\API\Transformers\EstablecimientoTransformer;
use App\Containers\AppSection\User\UI\API\Transformers\UserTransformer;
use App\Ship\Parents\Controllers\ApiController;

class GetAuthenticatedUserController extends ApiController
{
    public function __construct(
        private readonly GetAuthenticatedUserAction $getAuthenticatedUserAction
    ) {
    }

    public function __invoke()
    {
        $user = $this->getAuthenticatedUserAction->run();

        return $this->json([
            'data' => [
                'user' => $this->transform($user, UserTransformer::class),
                // 'person' => $this->transform($user->person, PersonTransformer::class),
                'privilegios' => $this->transform($user->privilegios, PrivilegioTransformer::class),
                // 'modulos' => $this->transform($user->modulos, ModuloTransformer::class),
                'establecimiento' => $this->transform($user->establecimiento, EstablecimientoTransformer::class),
                'roles' => $this->transform($user->roles, RoleTransformer::class),
            ]
        ]);
    }
}
