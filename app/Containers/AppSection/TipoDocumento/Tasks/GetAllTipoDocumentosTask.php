<?php

namespace App\Containers\AppSection\TipoDocumento\Tasks;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\AppSection\TipoDocumento\Data\Repositories\TipoDocumentoRepository;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllTipoDocumentosTask extends ParentTask
{
    public function __construct(
        protected TipoDocumentoRepository $repository
    ) {
    }

    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(): mixed
    {
        return $this->addRequestCriteria()->repository->paginate();
    }
}
