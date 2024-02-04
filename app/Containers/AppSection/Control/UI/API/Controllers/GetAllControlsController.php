<?php

namespace App\Containers\AppSection\Control\UI\API\Controllers;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Control\Actions\GetAllControlsAction;
use App\Containers\AppSection\Control\UI\API\Requests\GetAllControlsRequest;
use App\Containers\AppSection\Control\UI\API\Transformers\ControlTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllControlsController extends ApiController
{
    /**
     * @throws InvalidTransformerException
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function getAllControls(GetAllControlsRequest $request): array
    {
        $controls = app(GetAllControlsAction::class)->run($request);

        return $this->transform($controls, ControlTransformer::class);
    }
}
