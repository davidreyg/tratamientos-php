<?php

namespace App\Containers\AppSection\Control\Tasks;

use App\Containers\AppSection\Control\Data\Repositories\ControlRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class DeleteControlTask extends ParentTask
{
    public function __construct(
        protected ControlRepository $repository
    ) {
    }

    /**
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function run($id): int
    {
        try {
            return $this->repository->delete($id);
        } catch (ModelNotFoundException) {
            throw new NotFoundException();
        } catch (Exception $e) {
            throw new DeleteResourceFailedException($e->getMessage());
        }
    }
}
