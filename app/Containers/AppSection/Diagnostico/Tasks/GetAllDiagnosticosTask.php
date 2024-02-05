<?php

namespace App\Containers\AppSection\Diagnostico\Tasks;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\AppSection\Diagnostico\Data\Repositories\DiagnosticoRepository;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllDiagnosticosTask extends ParentTask
{
    public function __construct(
        protected DiagnosticoRepository $repository
    ) {
    }

    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(): mixed
    {
        return $this->addRequestCriteria(null, ['id', 'paciente_id'])->repository->orderBy('estado', 'desc')->all();
    }
}
