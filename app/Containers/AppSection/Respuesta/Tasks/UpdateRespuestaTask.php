<?php

namespace App\Containers\AppSection\Respuesta\Tasks;

use App\Containers\AppSection\Respuesta\Data\Repositories\RespuestaRepository;
use App\Containers\AppSection\Respuesta\Models\Respuesta;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UpdateRespuestaTask extends ParentTask
{
    public function __construct(
        protected RespuestaRepository $repository
    ) {
    }

    /**
     * @throws NotFoundException
     * @throws UpdateResourceFailedException
     */
    public function run(array $data, $id): Respuesta
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
