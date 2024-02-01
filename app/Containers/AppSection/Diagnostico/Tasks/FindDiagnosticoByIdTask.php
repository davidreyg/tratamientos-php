<?php

namespace App\Containers\AppSection\Diagnostico\Tasks;

use App\Containers\AppSection\Diagnostico\Data\Repositories\DiagnosticoRepository;
use App\Containers\AppSection\Diagnostico\Models\Diagnostico;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;

class FindDiagnosticoByIdTask extends ParentTask
{
    public function __construct(
        protected DiagnosticoRepository $repository
    ) {
    }

    /**
     * @throws NotFoundException
     */
    public function run($id): Diagnostico
    {
        try {
            return $this->repository->find($id);
        } catch (Exception) {
            throw new NotFoundException();
        }
    }
}
