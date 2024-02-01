<?php

namespace App\Containers\AppSection\Establecimiento\UI\API\Controllers;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Establecimiento\Actions\CreateEstablecimientoAction;
use App\Containers\AppSection\Establecimiento\Actions\DeleteEstablecimientoAction;
use App\Containers\AppSection\Establecimiento\Actions\FindEstablecimientoByIdAction;
use App\Containers\AppSection\Establecimiento\Actions\GetAllEstablecimientosAction;
use App\Containers\AppSection\Establecimiento\Actions\UpdateEstablecimientoAction;
use App\Containers\AppSection\Establecimiento\UI\API\Requests\CreateEstablecimientoRequest;
use App\Containers\AppSection\Establecimiento\UI\API\Requests\DeleteEstablecimientoRequest;
use App\Containers\AppSection\Establecimiento\UI\API\Requests\FindEstablecimientoByIdRequest;
use App\Containers\AppSection\Establecimiento\UI\API\Requests\GetAllEstablecimientosRequest;
use App\Containers\AppSection\Establecimiento\UI\API\Requests\UpdateEstablecimientoRequest;
use App\Containers\AppSection\Establecimiento\UI\API\Transformers\EstablecimientoTransformer;
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
     * @param CreateEstablecimientoRequest $request
     * @return JsonResponse
     * @throws InvalidTransformerException
     * @throws CreateResourceFailedException
     */
    public function createEstablecimiento(CreateEstablecimientoRequest $request): JsonResponse
    {
        $establecimiento = app(CreateEstablecimientoAction::class)->run($request);

        return $this->created($this->transform($establecimiento, EstablecimientoTransformer::class));
    }

    /**
     * @param FindEstablecimientoByIdRequest $request
     * @return array
     * @throws InvalidTransformerException
     * @throws NotFoundException
     */
    public function findEstablecimientoById(FindEstablecimientoByIdRequest $request): array
    {
        $establecimiento = app(FindEstablecimientoByIdAction::class)->run($request);

        return $this->transform($establecimiento, EstablecimientoTransformer::class);
    }

    /**
     * @param GetAllEstablecimientosRequest $request
     * @return array
     * @throws InvalidTransformerException
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function getAllEstablecimientos(GetAllEstablecimientosRequest $request): array
    {
        $establecimientos = app(GetAllEstablecimientosAction::class)->run($request);

        return $this->transform($establecimientos, EstablecimientoTransformer::class);
    }

    /**
     * @param UpdateEstablecimientoRequest $request
     * @return array
     * @throws InvalidTransformerException
     * @throws UpdateResourceFailedException
     */
    public function updateEstablecimiento(UpdateEstablecimientoRequest $request): array
    {
        $establecimiento = app(UpdateEstablecimientoAction::class)->run($request);

        return $this->transform($establecimiento, EstablecimientoTransformer::class);
    }

    /**
     * @param DeleteEstablecimientoRequest $request
     * @return JsonResponse
     * @throws DeleteResourceFailedException
     */
    public function deleteEstablecimiento(DeleteEstablecimientoRequest $request): JsonResponse
    {
        app(DeleteEstablecimientoAction::class)->run($request);

        return $this->noContent();
    }
}
