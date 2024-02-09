<?php

namespace App\Containers\AppSection\Paciente\UI\API\Controllers;

use Apiato\Core\Exceptions\IncorrectIdException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Paciente\Actions\CreatePacienteAction;
use App\Containers\AppSection\Paciente\UI\API\Requests\CreatePacienteRequest;
use App\Containers\AppSection\Paciente\UI\API\Transformers\PacienteTransformer;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class CreatePacienteController extends ApiController
{
    /**
     * @param CreatePacienteRequest $request
     * @return JsonResponse
     * @throws CreateResourceFailedException
     * @throws InvalidTransformerException
     * @throws IncorrectIdException
     */
    public function createPaciente(CreatePacienteRequest $request): JsonResponse
    {
        $paciente = app(CreatePacienteAction::class)->run($request);

        return $this->created($this->transform($paciente, PacienteTransformer::class));
    }
}
