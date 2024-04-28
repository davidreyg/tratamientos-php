<?php

namespace App\Containers\AppSection\Examen\UI\API\Controllers;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Examen\Actions\GetAllCategoriasAction;
use App\Containers\AppSection\Examen\UI\API\Requests\GetAllCategoriasRequest;
use App\Containers\AppSection\Examen\UI\API\Transformers\CategoriaTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Prettus\Repository\Exceptions\RepositoryException;

class CategoriaController extends ApiController
{
    /**
     * @param GetAllCategoriasRequest $request
     * @return array
     * @throws InvalidTransformerException
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function getAllCategorias(GetAllCategoriasRequest $request): array
    {
        $categorias = app(GetAllCategoriasAction::class)->run($request);

        return $this->transform($categorias, CategoriaTransformer::class);
    }
}
