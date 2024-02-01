<?php

namespace App\Containers\AppSection\Persona\Tasks;

use App\Containers\AppSection\Persona\Data\Repositories\PersonaRepository;
use App\Containers\AppSection\Persona\Models\Persona;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;

class FindPersonaByIdTask extends ParentTask
{
    public function __construct(
        protected PersonaRepository $repository
    ) {
    }

    /**
     * @throws NotFoundException
     */
    public function run($id): Persona
    {
        try {
            return $this->repository->find($id);
        } catch (Exception) {
            throw new NotFoundException();
        }
    }
}
