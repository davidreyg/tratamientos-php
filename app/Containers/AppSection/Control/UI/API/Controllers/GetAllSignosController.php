<?php

namespace App\Containers\AppSection\Control\UI\API\Controllers;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Control\Models\Signo;
use App\Containers\AppSection\Control\UI\API\Transformers\SignoTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllSignosController extends ApiController
{
    /**
     * @throws InvalidTransformerException
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function getAll(): array
    {
        $signos = Signo::all();

        return $this->transform($signos, SignoTransformer::class);
    }
}
