<?php

namespace App\Containers\AppSection\Paciente\UI\API\Controllers;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Paciente\Actions\GetAllPacientesAction;
use App\Containers\AppSection\Paciente\UI\API\Requests\GetAllPacientesRequest;
use App\Containers\AppSection\Paciente\UI\API\Transformers\PacienteTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllPacientesController extends ApiController
{
    /**
     * @throws InvalidTransformerException
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function getAllPacientes(GetAllPacientesRequest $request): array
    {
        $pacientes = app(GetAllPacientesAction::class)->run($request);

        return $this->transform($pacientes, PacienteTransformer::class);
    }
}
