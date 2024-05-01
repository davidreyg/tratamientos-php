<?php

namespace App\Containers\AppSection\Categoria\UI\API\Controllers;

use Apiato\Core\Exceptions\IncorrectIdException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Categoria\Actions\CreateCategoriaAction;
use App\Containers\AppSection\Categoria\UI\API\Requests\CreateCategoriaRequest;
use App\Containers\AppSection\Categoria\UI\API\Transformers\CategoriaTransformer;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class CreateCategoriaController extends ApiController
{
    /**
     * @param CreateCategoriaRequest $request
     * @return JsonResponse
     * @throws CreateResourceFailedException
     * @throws InvalidTransformerException
     * @throws IncorrectIdException
     */
    public function createCategoria(CreateCategoriaRequest $request): JsonResponse
    {
        $categoria = app(CreateCategoriaAction::class)->run($request);

        return $this->created($this->transform($categoria, CategoriaTransformer::class));
    }
}
