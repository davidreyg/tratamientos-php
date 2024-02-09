<?php

namespace App\Containers\AppSection\TipoDocumento\Tasks;

use App\Containers\AppSection\TipoDocumento\Data\Repositories\TipoDocumentoRepository;
use App\Containers\AppSection\TipoDocumento\Models\TipoDocumento;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;

class FindTipoDocumentoByIdTask extends ParentTask
{
    public function __construct(
        protected TipoDocumentoRepository $repository
    ) {
    }

    /**
     * @throws NotFoundException
     */
    public function run($id): TipoDocumento
    {
        try {
            return $this->repository->find($id);
        } catch (Exception) {
            throw new NotFoundException();
        }
    }
}
