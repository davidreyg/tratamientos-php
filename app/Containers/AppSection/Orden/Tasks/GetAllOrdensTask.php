<?php

namespace App\Containers\AppSection\Orden\Tasks;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\AppSection\Orden\Data\Criterias\OrdensByEstablecimientoCriteria;
use App\Containers\AppSection\Orden\Data\Repositories\OrdenRepository;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllOrdensTask extends ParentTask
{
    public function __construct(
        protected OrdenRepository $repository
    ) {
    }

    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(bool $all): mixed
    {
        if (!$all) {
            $this->repository->pushCriteria(new OrdensByEstablecimientoCriteria());
        }
        return $this->addRequestCriteria()->repository->orderBy('fecha_registro', 'desc')->paginate();
    }
}
