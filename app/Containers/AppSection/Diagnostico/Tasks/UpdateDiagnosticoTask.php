<?php

namespace App\Containers\AppSection\Diagnostico\Tasks;

use App\Containers\AppSection\Diagnostico\Data\Repositories\DiagnosticoRepository;
use App\Containers\AppSection\Diagnostico\Models\Diagnostico;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UpdateDiagnosticoTask extends ParentTask
{
    public function __construct(
        protected DiagnosticoRepository $repository
    ) {
    }

    /**
     * @throws NotFoundException
     * @throws UpdateResourceFailedException
     */
    public function run(array $data, $id): Diagnostico
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
