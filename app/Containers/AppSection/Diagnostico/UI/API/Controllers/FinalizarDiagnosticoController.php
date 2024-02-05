<?php

namespace App\Containers\AppSection\Diagnostico\UI\API\Controllers;

use Apiato\Core\Exceptions\IncorrectIdException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Diagnostico\Actions\FinalizarDiagnosticoAction;
use App\Containers\AppSection\Diagnostico\UI\API\Requests\FinalizarDiagnosticoRequest;
use App\Containers\AppSection\Diagnostico\UI\API\Transformers\DiagnosticoTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;

class FinalizarDiagnosticoController extends ApiController
{
    /**
     * @param FinalizarDiagnosticoRequest $request
     * @return array
     * @throws InvalidTransformerException
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function updateDiagnostico(FinalizarDiagnosticoRequest $request): array
    {
        $diagnostico = app(FinalizarDiagnosticoAction::class)->run($request);

        return $this->transform($diagnostico, DiagnosticoTransformer::class);
    }
}
