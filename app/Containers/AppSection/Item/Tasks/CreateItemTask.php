<?php

namespace App\Containers\AppSection\Item\Tasks;

use App\Containers\AppSection\Item\Data\Repositories\ItemRepository;
use App\Containers\AppSection\Item\Models\Item;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;

class CreateItemTask extends ParentTask
{
    public function __construct(
        protected ItemRepository $repository
    ) {
    }

    /**
     * @throws CreateResourceFailedException
     */
    public function run(array $data): Item
    {
        try {
            return $this->repository->create($data);
        } catch (Exception) {
            throw new CreateResourceFailedException();
        }
    }
}
