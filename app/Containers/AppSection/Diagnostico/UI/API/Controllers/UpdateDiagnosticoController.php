<?php

namespace App\Containers\AppSection\Diagnostico\UI\API\Controllers;

use Apiato\Core\Exceptions\IncorrectIdException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Diagnostico\Actions\UpdateDiagnosticoAction;
use App\Containers\AppSection\Diagnostico\UI\API\Requests\UpdateDiagnosticoRequest;
use App\Containers\AppSection\Diagnostico\UI\API\Transformers\DiagnosticoTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;

class UpdateDiagnosticoController extends ApiController
{
    /**
     * @param UpdateDiagnosticoRequest $request
     * @return array
     * @throws InvalidTransformerException
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function updateDiagnostico(UpdateDiagnosticoRequest $request): array
    {
        $diagnostico = app(UpdateDiagnosticoAction::class)->run($request);

        return $this->transform($diagnostico, DiagnosticoTransformer::class);
    }
}
