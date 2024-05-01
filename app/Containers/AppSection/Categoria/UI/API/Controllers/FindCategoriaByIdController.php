<?php

namespace App\Containers\AppSection\Categoria\UI\API\Controllers;

use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Categoria\Actions\FindCategoriaByIdAction;
use App\Containers\AppSection\Categoria\UI\API\Requests\FindCategoriaByIdRequest;
use App\Containers\AppSection\Categoria\UI\API\Transformers\CategoriaTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\ApiController;

class FindCategoriaByIdController extends ApiController
{
    /**
     * @throws InvalidTransformerException|NotFoundException
     */
    public function findCategoriaById(FindCategoriaByIdRequest $request): array
    {
        $categoria = app(FindCategoriaByIdAction::class)->run($request);

        return $this->transform($categoria, CategoriaTransformer::class);
    }
}
