<?php

namespace App\Containers\AppSection\Persona\Tasks;

use App\Containers\AppSection\Persona\Data\Repositories\PersonaRepository;
use App\Containers\AppSection\Persona\Models\Persona;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UpdatePersonaTask extends ParentTask
{
    public function __construct(
        protected PersonaRepository $repository
    ) {
    }

    /**
     * @throws NotFoundException
     * @throws UpdateResourceFailedException
     */
    public function run(array $data, $id): Persona
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
