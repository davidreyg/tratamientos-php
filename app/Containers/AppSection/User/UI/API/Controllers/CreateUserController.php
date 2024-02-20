<?php

namespace App\Containers\AppSection\User\UI\API\Controllers;

use App\Containers\AppSection\User\Actions\CreateUserAction;
use App\Containers\AppSection\User\UI\API\Requests\CreateUserRequest;
use App\Containers\AppSection\User\UI\API\Transformers\UserTransformer;
use App\Ship\Parents\Controllers\ApiController;

class CreateUserController extends ApiController
{
    public function __construct(
        private readonly CreateUserAction $createUserAction
    ) {
    }

    public function __invoke(CreateUserRequest $request): array
    {
        $user = $this->createUserAction->run($request);

        return $this->transform($user, UserTransformer::class);
    }
}
