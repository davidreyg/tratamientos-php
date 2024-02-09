<?php

namespace App\Containers\AppSection\TipoDocumento\Tasks;

use App\Containers\AppSection\TipoDocumento\Data\Repositories\TipoDocumentoRepository;
use App\Containers\AppSection\TipoDocumento\Models\TipoDocumento;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;

class CreateTipoDocumentoTask extends ParentTask
{
    public function __construct(
        protected TipoDocumentoRepository $repository
    ) {
    }

    /**
     * @throws CreateResourceFailedException
     */
    public function run(array $data): TipoDocumento
    {
        try {
            return $this->repository->create($data);
        } catch (Exception) {
            throw new CreateResourceFailedException();
        }
    }
}
