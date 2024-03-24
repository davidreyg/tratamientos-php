<?php

namespace App\Containers\AppSection\Item\Tasks;

use App\Containers\AppSection\Item\Data\Repositories\ItemRepository;
use App\Containers\AppSection\Item\Models\Item;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;

class FindItemByIdTask extends ParentTask
{
    public function __construct(
        protected ItemRepository $repository
    ) {
    }

    /**
     * @throws NotFoundException
     */
    public function run($id): Item
    {
        try {
            return $this->repository->find($id);
        } catch (Exception) {
            throw new NotFoundException();
        }
    }
}
