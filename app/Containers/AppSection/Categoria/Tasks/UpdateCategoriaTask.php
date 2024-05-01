<?php

namespace App\Containers\AppSection\Categoria\Tasks;

use App\Containers\AppSection\Categoria\Data\Repositories\CategoriaRepository;
use App\Containers\AppSection\Categoria\Models\Categoria;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UpdateCategoriaTask extends ParentTask
{
    public function __construct(
        protected CategoriaRepository $repository
    ) {
    }

    /**
     * @throws NotFoundException
     * @throws UpdateResourceFailedException
     */
    public function run(array $data, $id): Categoria
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
