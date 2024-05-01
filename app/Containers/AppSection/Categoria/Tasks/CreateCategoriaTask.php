<?php

namespace App\Containers\AppSection\Categoria\Tasks;

use App\Containers\AppSection\Categoria\Data\Repositories\CategoriaRepository;
use App\Containers\AppSection\Categoria\Models\Categoria;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;

class CreateCategoriaTask extends ParentTask
{
    public function __construct(
        protected CategoriaRepository $repository
    ) {
    }

    /**
     * @throws CreateResourceFailedException
     */
    public function run(array $data): Categoria
    {
        try {
            return $this->repository->create($data);
        } catch (Exception) {
            throw new CreateResourceFailedException();
        }
    }
}
