<?php

namespace App\Containers\AppSection\Financiamiento\UI\API\Controllers;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Financiamiento\Actions\CreateFinanciamientoAction;
use App\Containers\AppSection\Financiamiento\Actions\DeleteFinanciamientoAction;
use App\Containers\AppSection\Financiamiento\Actions\FindFinanciamientoByIdAction;
use App\Containers\AppSection\Financiamiento\Actions\GetAllFinanciamientosAction;
use App\Containers\AppSection\Financiamiento\Actions\UpdateFinanciamientoAction;
use App\Containers\AppSection\Financiamiento\UI\API\Requests\CreateFinanciamientoRequest;
use App\Containers\AppSection\Financiamiento\UI\API\Requests\DeleteFinanciamientoRequest;
use App\Containers\AppSection\Financiamiento\UI\API\Requests\FindFinanciamientoByIdRequest;
use App\Containers\AppSection\Financiamiento\UI\API\Requests\GetAllFinanciamientosRequest;
use App\Containers\AppSection\Financiamiento\UI\API\Requests\UpdateFinanciamientoRequest;
use App\Containers\AppSection\Financiamiento\UI\API\Transformers\FinanciamientoTransformer;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;
use Prettus\Repository\Exceptions\RepositoryException;

class Controller extends ApiController
{
    /**
     * @param CreateFinanciamientoRequest $request
     * @return JsonResponse
     * @throws InvalidTransformerException
     * @throws CreateResourceFailedException
     */
    public function createFinanciamiento(CreateFinanciamientoRequest $request): JsonResponse
    {
        $financiamiento = app(CreateFinanciamientoAction::class)->run($request);

        return $this->created($this->transform($financiamiento, FinanciamientoTransformer::class));
    }

    /**
     * @param FindFinanciamientoByIdRequest $request
     * @return array
     * @throws InvalidTransformerException
     * @throws NotFoundException
     */
    public function findFinanciamientoById(FindFinanciamientoByIdRequest $request): array
    {
        $financiamiento = app(FindFinanciamientoByIdAction::class)->run($request);

        return $this->transform($financiamiento, FinanciamientoTransformer::class);
    }

    /**
     * @param GetAllFinanciamientosRequest $request
     * @return array
     * @throws InvalidTransformerException
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function getAllFinanciamientos(GetAllFinanciamientosRequest $request): array
    {
        $financiamientos = app(GetAllFinanciamientosAction::class)->run($request);

        return $this->transform($financiamientos, FinanciamientoTransformer::class);
    }

    /**
     * @param UpdateFinanciamientoRequest $request
     * @return array
     * @throws InvalidTransformerException
     * @throws UpdateResourceFailedException
     */
    public function updateFinanciamiento(UpdateFinanciamientoRequest $request): array
    {
        $financiamiento = app(UpdateFinanciamientoAction::class)->run($request);

        return $this->transform($financiamiento, FinanciamientoTransformer::class);
    }

    /**
     * @param DeleteFinanciamientoRequest $request
     * @return JsonResponse
     * @throws DeleteResourceFailedException
     */
    public function deleteFinanciamiento(DeleteFinanciamientoRequest $request): JsonResponse
    {
        app(DeleteFinanciamientoAction::class)->run($request);

        return $this->noContent();
    }
}
