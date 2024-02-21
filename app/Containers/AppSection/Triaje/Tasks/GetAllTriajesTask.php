<?php

namespace App\Containers\AppSection\Triaje\Tasks;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\AppSection\Triaje\Data\Criterias\TriajeByEstablecimientoCriteria;
use App\Containers\AppSection\Triaje\Data\Repositories\TriajeRepository;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllTriajesTask extends ParentTask
{
    public function __construct(
        protected TriajeRepository $repository
    ) {
    }

    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(bool $fetchAll): mixed
    {
        if (!$fetchAll) {
            $this->repository->pushCriteria(new TriajeByEstablecimientoCriteria());
        }
        return $this->addRequestCriteria(null, ['id', 'paciente_id'])
            ->repository->paginate();
    }
}
