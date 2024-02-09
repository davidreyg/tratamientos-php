<?php

namespace App\Containers\AppSection\Paciente\Tasks;

use App\Containers\AppSection\Paciente\Data\Repositories\PacienteRepository;
use App\Containers\AppSection\Paciente\Models\Paciente;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;

class CreatePacienteTask extends ParentTask
{
    public function __construct(
        protected PacienteRepository $repository
    ) {
    }

    /**
     * @throws CreateResourceFailedException
     */
    public function run(array $data): Paciente
    {
        try {
            return $this->repository->create($data);
        } catch (Exception) {
            throw new CreateResourceFailedException();
        }
    }
}
