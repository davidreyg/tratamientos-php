<?php

namespace App\Containers\AppSection\Control\UI\API\Controllers;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Control\Models\Complicacion;
use App\Containers\AppSection\Control\UI\API\Transformers\ComplicacionTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllComplicacionesController extends ApiController
{
    /**
     * @throws InvalidTransformerException
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function getAll(): array
    {
        $complicaciones = Complicacion::all();

        return $this->transform($complicaciones, ComplicacionTransformer::class);
    }
}
