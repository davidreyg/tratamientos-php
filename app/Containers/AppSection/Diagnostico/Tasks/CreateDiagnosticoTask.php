<?php

namespace App\Containers\AppSection\Diagnostico\Tasks;

use App\Containers\AppSection\Diagnostico\Data\Repositories\DiagnosticoRepository;
use App\Containers\AppSection\Diagnostico\Models\Diagnostico;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;

class CreateDiagnosticoTask extends ParentTask
{
    public function __construct(
        protected DiagnosticoRepository $repository
    ) {
    }

    /**
     * @throws CreateResourceFailedException
     */
    public function run(array $data): Diagnostico
    {
        try {
            return $this->repository->create($data);
        } catch (Exception) {
            throw new CreateResourceFailedException();
        }
    }
}
