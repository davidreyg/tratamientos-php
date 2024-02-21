<?php

namespace App\Containers\AppSection\Empleado\Tasks;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\AppSection\Empleado\Data\Criterias\EmpleadoByEstablecimientoCriteria;
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
    public function run(bool $all): mixed
    {
        if (!$all) {
            $this->repository->pushCriteria(new EmpleadoByEstablecimientoCriteria());
        }
        return $this->addRequestCriteria()->repository->paginate();
    }
}
