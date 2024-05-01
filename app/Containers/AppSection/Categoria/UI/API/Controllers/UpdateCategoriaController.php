<?php

namespace App\Containers\AppSection\Categoria\UI\API\Controllers;

use Apiato\Core\Exceptions\IncorrectIdException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Categoria\Actions\UpdateCategoriaAction;
use App\Containers\AppSection\Categoria\UI\API\Requests\UpdateCategoriaRequest;
use App\Containers\AppSection\Categoria\UI\API\Transformers\CategoriaTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;

class UpdateCategoriaController extends ApiController
{
    /**
     * @param UpdateCategoriaRequest $request
     * @return array
     * @throws InvalidTransformerException
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function updateCategoria(UpdateCategoriaRequest $request): array
    {
        $categoria = app(UpdateCategoriaAction::class)->run($request);

        return $this->transform($categoria, CategoriaTransformer::class);
    }
}
