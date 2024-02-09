<?php

namespace App\Containers\AppSection\Paciente\UI\API\Controllers;

use Apiato\Core\Exceptions\IncorrectIdException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Paciente\Actions\UpdatePacienteAction;
use App\Containers\AppSection\Paciente\UI\API\Requests\UpdatePacienteRequest;
use App\Containers\AppSection\Paciente\UI\API\Transformers\PacienteTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;

class UpdatePacienteController extends ApiController
{
    /**
     * @param UpdatePacienteRequest $request
     * @return array
     * @throws InvalidTransformerException
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function updatePaciente(UpdatePacienteRequest $request): array
    {
        $paciente = app(UpdatePacienteAction::class)->run($request);

        return $this->transform($paciente, PacienteTransformer::class);
    }
}
