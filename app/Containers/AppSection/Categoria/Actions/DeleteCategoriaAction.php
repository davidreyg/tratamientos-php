<?php

namespace App\Containers\AppSection\Categoria\Actions;

use App\Containers\AppSection\Categoria\Tasks\DeleteCategoriaTask;
use App\Containers\AppSection\Categoria\UI\API\Requests\DeleteCategoriaRequest;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class DeleteCategoriaAction extends ParentAction
{
    /**
     * @param DeleteCategoriaRequest $request
     * @return int
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function run(DeleteCategoriaRequest $request): int
    {
        return app(DeleteCategoriaTask::class)->run($request->id);
    }
}
