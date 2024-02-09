<?php

namespace App\Containers\AppSection\TipoDocumento\Tasks;

use App\Containers\AppSection\TipoDocumento\Data\Repositories\TipoDocumentoRepository;
use App\Containers\AppSection\TipoDocumento\Models\TipoDocumento;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UpdateTipoDocumentoTask extends ParentTask
{
    public function __construct(
        protected TipoDocumentoRepository $repository
    ) {
    }

    /**
     * @throws NotFoundException
     * @throws UpdateResourceFailedException
     */
    public function run(array $data, $id): TipoDocumento
    {
        try {
            return $this->repository->update($data, $id);
        } catch (ModelNotFoundException) {
            throw new NotFoundException();
        } catch (Exception) {
            throw new UpdateResourceFailedException();
        }
    }
}
