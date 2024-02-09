<?php

namespace App\Containers\AppSection\Paciente\UI\API\Controllers;

use App\Containers\AppSection\Paciente\Actions\DeletePacienteAction;
use App\Containers\AppSection\Paciente\UI\API\Requests\DeletePacienteRequest;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class DeletePacienteController extends ApiController
{
    /**
     * @param DeletePacienteRequest $request
     * @return JsonResponse
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function deletePaciente(DeletePacienteRequest $request): JsonResponse
    {
        app(DeletePacienteAction::class)->run($request);

        return $this->noContent();
    }
}
