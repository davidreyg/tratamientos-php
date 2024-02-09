<?php

namespace App\Containers\AppSection\Paciente\Tasks;

use App\Containers\AppSection\Paciente\Data\Repositories\PacienteRepository;
use App\Containers\AppSection\Paciente\Models\Paciente;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;

class FindPacienteByIdTask extends ParentTask
{
    public function __construct(
        protected PacienteRepository $repository
    ) {
    }

    /**
     * @throws NotFoundException
     */
    public function run($id): Paciente
    {
        try {
            return $this->repository->find($id);
        } catch (Exception) {
            throw new NotFoundException();
        }
    }
}
