<?php

namespace App\Containers\AppSection\Categoria\Tasks;

use App\Containers\AppSection\Categoria\Data\Repositories\CategoriaRepository;
use App\Containers\AppSection\Categoria\Models\Categoria;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;

class FindCategoriaByIdTask extends ParentTask
{
    public function __construct(
        protected CategoriaRepository $repository
    ) {
    }

    /**
     * @throws NotFoundException
     */
    public function run($id): Categoria
    {
        try {
            return $this->repository->find($id);
        } catch (Exception) {
            throw new NotFoundException();
        }
    }
}
