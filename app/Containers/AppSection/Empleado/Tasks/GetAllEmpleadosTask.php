<?php

namespace App\Containers\AppSection\Empleado\Tasks;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\AppSection\Empleado\Data\Criterias\IsOwnEstablecimientoCriteria;
use App\Containers\AppSection\Empleado\Data\Repositories\EmpleadoRepository;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllEmpleadosTask extends ParentTask
{
    public function __construct(
        protected EmpleadoRepository $repository
    ) {
    }

    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(): mixed
    {
        $this->repository->pushCriteria(new IsOwnEstablecimientoCriteria());
        return $this->addRequestCriteria()->repository->paginate();
    }
}
