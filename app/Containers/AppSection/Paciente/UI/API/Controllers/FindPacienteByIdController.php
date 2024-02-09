<?php

namespace App\Containers\AppSection\Paciente\UI\API\Controllers;

use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Paciente\Actions\FindPacienteByIdAction;
use App\Containers\AppSection\Paciente\UI\API\Requests\FindPacienteByIdRequest;
use App\Containers\AppSection\Paciente\UI\API\Transformers\PacienteTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\ApiController;

class FindPacienteByIdController extends ApiController
{
    /**
     * @throws InvalidTransformerException|NotFoundException
     */
    public function findPacienteById(FindPacienteByIdRequest $request): array
    {
        $paciente = app(FindPacienteByIdAction::class)->run($request);

        return $this->transform($paciente, PacienteTransformer::class);
    }
}
