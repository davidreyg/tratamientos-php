<?php

namespace App\Containers\AppSection\Persona\UI\API\Controllers;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Persona\Actions\CreatePersonaAction;
use App\Containers\AppSection\Persona\Actions\DeletePersonaAction;
use App\Containers\AppSection\Persona\Actions\FindPersonaByIdAction;
use App\Containers\AppSection\Persona\Actions\GetAllPacientesAction;
use App\Containers\AppSection\Persona\Actions\GetAllPersonasAction;
use App\Containers\AppSection\Persona\Actions\UpdatePersonaAction;
use App\Containers\AppSection\Persona\UI\API\Requests\CreatePersonaRequest;
use App\Containers\AppSection\Persona\UI\API\Requests\DeletePersonaRequest;
use App\Containers\AppSection\Persona\UI\API\Requests\FindPersonaByIdRequest;
use App\Containers\AppSection\Persona\UI\API\Requests\GetAllPersonasRequest;
use App\Containers\AppSection\Persona\UI\API\Requests\UpdatePersonaRequest;
use App\Containers\AppSection\Persona\UI\API\Transformers\PersonaTransformer;
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
     * @param CreatePersonaRequest $request
     * @return JsonResponse
     * @throws InvalidTransformerException
     * @throws CreateResourceFailedException
     */
    public function createPersona(CreatePersonaRequest $request): JsonResponse
    {
        $persona = app(CreatePersonaAction::class)->run($request);

        return $this->created($this->transform($persona, PersonaTransformer::class));
    }

    /**
     * @param FindPersonaByIdRequest $request
     * @return array
     * @throws InvalidTransformerException
     * @throws NotFoundException
     */
    public function findPersonaById(FindPersonaByIdRequest $request): array
    {
        $persona = app(FindPersonaByIdAction::class)->run($request);

        return $this->transform($persona, PersonaTransformer::class);
    }

    /**
     * @param GetAllPersonasRequest $request
     * @return array
     * @throws InvalidTransformerException
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function getAllPersonas(GetAllPersonasRequest $request): array
    {
        $personas = app(GetAllPersonasAction::class)->run($request);

        return $this->transform($personas, PersonaTransformer::class);
    }

    /**
     * @param GetAllPersonasRequest $request
     * @return array
     * @throws InvalidTransformerException
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function getAllPacientes(GetAllPersonasRequest $request): array
    {
        $pacientes = app(GetAllPacientesAction::class)->run($request);

        return $this->transform($pacientes, PersonaTransformer::class);
    }

    /**
     * @param UpdatePersonaRequest $request
     * @return array
     * @throws InvalidTransformerException
     * @throws UpdateResourceFailedException
     */
    public function updatePersona(UpdatePersonaRequest $request): array
    {
        $persona = app(UpdatePersonaAction::class)->run($request);

        return $this->transform($persona, PersonaTransformer::class);
    }

    /**
     * @param DeletePersonaRequest $request
     * @return JsonResponse
     * @throws DeleteResourceFailedException
     */
    public function deletePersona(DeletePersonaRequest $request): JsonResponse
    {
        app(DeletePersonaAction::class)->run($request);

        return $this->noContent();
    }
}
