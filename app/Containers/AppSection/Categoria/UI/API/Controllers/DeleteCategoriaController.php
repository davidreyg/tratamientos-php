<?php

namespace App\Containers\AppSection\Categoria\UI\API\Controllers;

use App\Containers\AppSection\Categoria\Actions\DeleteCategoriaAction;
use App\Containers\AppSection\Categoria\UI\API\Requests\DeleteCategoriaRequest;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class DeleteCategoriaController extends ApiController
{
    /**
     * @param DeleteCategoriaRequest $request
     * @return JsonResponse
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function deleteCategoria(DeleteCategoriaRequest $request): JsonResponse
    {
        app(DeleteCategoriaAction::class)->run($request);

        return $this->noContent();
    }
}
