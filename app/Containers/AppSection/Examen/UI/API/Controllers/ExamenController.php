<?php

namespace App\Containers\AppSection\Examen\UI\API\Controllers;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Examen\Actions\CreateExamenAction;
use App\Containers\AppSection\Examen\Actions\DeleteExamenAction;
use App\Containers\AppSection\Examen\Actions\FindExamenByIdAction;
use App\Containers\AppSection\Examen\Actions\GetAllExamensAction;
use App\Containers\AppSection\Examen\Actions\UpdateExamenAction;
use App\Containers\AppSection\Examen\UI\API\Requests\CreateExamenRequest;
use App\Containers\AppSection\Examen\UI\API\Requests\DeleteExamenRequest;
use App\Containers\AppSection\Examen\UI\API\Requests\FindExamenByIdRequest;
use App\Containers\AppSection\Examen\UI\API\Requests\GetAllExamensRequest;
use App\Containers\AppSection\Examen\UI\API\Requests\UpdateExamenRequest;
use App\Containers\AppSection\Examen\UI\API\Transformers\ExamenTransformer;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;
use Prettus\Repository\Exceptions\RepositoryException;

class ExamenController extends ApiController
{
    /**
     * @param CreateExamenRequest $request
     * @return JsonResponse
     * @throws InvalidTransformerException
     * @throws CreateResourceFailedException
     */
    public function createExamen(CreateExamenRequest $request): JsonResponse
    {
        $examen = app(CreateExamenAction::class)->run($request);

        return $this->created($this->transform($examen, ExamenTransformer::class));
    }

    /**
     * @param FindExamenByIdRequest $request
     * @return array
     * @throws InvalidTransformerException
     * @throws NotFoundException
     */
    public function findExamenById(FindExamenByIdRequest $request): array
    {
        $examen = app(FindExamenByIdAction::class)->run($request);

        return $this->transform($examen, ExamenTransformer::class);
    }

    /**
     * @param GetAllExamensRequest $request
     * @return array
     * @throws InvalidTransformerException
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function getAllExamens(GetAllExamensRequest $request): array
    {
        $examens = app(GetAllExamensAction::class)->run($request);

        return $this->transform($examens, ExamenTransformer::class);
    }

    /**
     * @param UpdateExamenRequest $request
     * @return array
     * @throws InvalidTransformerException
     * @throws UpdateResourceFailedException
     */
    public function updateExamen(UpdateExamenRequest $request): array
    {
        $examen = app(UpdateExamenAction::class)->run($request);

        return $this->transform($examen, ExamenTransformer::class);
    }

    /**
     * @param DeleteExamenRequest $request
     * @return JsonResponse
     * @throws DeleteResourceFailedException
     */
    public function deleteExamen(DeleteExamenRequest $request): JsonResponse
    {
        app(DeleteExamenAction::class)->run($request);

        return $this->noContent();
    }
}
