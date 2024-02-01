<?php

namespace App\Containers\AppSection\Persona\Tasks;

use App\Containers\AppSection\Persona\Data\Repositories\PersonaRepository;
use App\Containers\AppSection\Persona\Models\Persona;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;

class CreatePersonaTask extends ParentTask
{
    public function __construct(
        protected PersonaRepository $repository
    ) {
    }

    /**
     * @throws CreateResourceFailedException
     */
    public function run(array $data): Persona
    {
        try {
            return $this->repository->create($data);
        } catch (Exception) {
            throw new CreateResourceFailedException();
        }
    }
}
