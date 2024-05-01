<?php

namespace App\Containers\AppSection\Categoria\UI\API\Controllers;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Categoria\Actions\GetAllCategoriasAction;
use App\Containers\AppSection\Categoria\UI\API\Requests\GetAllCategoriasRequest;
use App\Containers\AppSection\Categoria\UI\API\Transformers\CategoriaTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllCategoriasController extends ApiController
{
    /**
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
