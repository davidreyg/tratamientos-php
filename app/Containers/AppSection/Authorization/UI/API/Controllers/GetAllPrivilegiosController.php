<?php

namespace App\Containers\AppSection\Authorization\UI\API\Controllers;

use App\Containers\AppSection\Authorization\Actions\GetAllPrivilegiosAction;
use App\Containers\AppSection\Authorization\UI\API\Requests\GetAllPrivilegiosRequest;
use App\Containers\AppSection\Authorization\UI\API\Transformers\PrivilegioTransformer;
use App\Ship\Parents\Controllers\ApiController;

class GetAllPrivilegiosController extends ApiController
{
    public function __construct(
        private readonly GetAllPrivilegiosAction $getAllPrivilegiosAction
    ) {
    }

    public function __invoke(GetAllPrivilegiosRequest $request): array
    {
        $privilegios = $this->getAllPrivilegiosAction->run();

        return $this->transform($privilegios, PrivilegioTransformer::class);
    }
}
