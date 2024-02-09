<?php

namespace App\Containers\AppSection\Paciente\Tasks;

use App\Containers\AppSection\Paciente\Data\Repositories\PacienteRepository;
use App\Containers\AppSection\Paciente\Models\Paciente;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UpdatePacienteTask extends ParentTask
{
    public function __construct(
        protected PacienteRepository $repository
    ) {
    }

    /**
     * @throws NotFoundException
     * @throws UpdateResourceFailedException
     */
    public function run(array $data, $id): Paciente
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
