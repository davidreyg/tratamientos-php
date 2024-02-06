<?php

namespace App\Containers\AppSection\Persona\Tasks;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\AppSection\Persona\Data\Criterias\IsMedicoCriteria;
use App\Containers\AppSection\Persona\Data\Criterias\IsOwnerEstablecimientoCriteria;
use App\Containers\AppSection\Persona\Data\Repositories\PersonaRepository;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllMedicosTask extends ParentTask
{
    public function __construct(
        protected PersonaRepository $repository
    ) {
    }

    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(): mixed
    {
        $this->repository->pushCriteria(new IsMedicoCriteria());
        $this->repository->pushCriteria(new IsOwnerEstablecimientoCriteria());
        return $this->addRequestCriteria()->repository->all();
    }
}
