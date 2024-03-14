<?php

namespace App\Containers\AppSection\Unidad\Tasks;

use App\Containers\AppSection\Unidad\Data\Repositories\UnidadRepository;
use App\Containers\AppSection\Unidad\Models\Unidad;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UpdateUnidadTask extends ParentTask
{
    public function __construct(
        protected UnidadRepository $repository
    ) {
    }

    /**
     * @throws NotFoundException
     * @throws UpdateResourceFailedException
     */
    public function run(array $data, $id): Unidad
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
