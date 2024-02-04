<?php

namespace App\Containers\AppSection\Diagnostico\UI\API\Controllers;

use Apiato\Core\Exceptions\IncorrectIdException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Diagnostico\Actions\CreateDiagnosticoAction;
use App\Containers\AppSection\Diagnostico\UI\API\Requests\CreateDiagnosticoRequest;
use App\Containers\AppSection\Diagnostico\UI\API\Transformers\DiagnosticoTransformer;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class CreateDiagnosticoController extends ApiController
{
    /**
     * @param CreateDiagnosticoRequest $request
     * @return JsonResponse
     * @throws CreateResourceFailedException
     * @throws InvalidTransformerException
     * @throws IncorrectIdException
     */
    public function createDiagnostico(CreateDiagnosticoRequest $request): JsonResponse
    {
        $diagnostico = app(CreateDiagnosticoAction::class)->transactionalRun($request);

        return $this->created($this->transform($diagnostico, DiagnosticoTransformer::class));
    }
}
