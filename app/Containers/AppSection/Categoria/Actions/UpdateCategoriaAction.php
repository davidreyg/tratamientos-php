<?php

namespace App\Containers\AppSection\Categoria\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\AppSection\Categoria\Models\Categoria;
use App\Containers\AppSection\Categoria\Tasks\UpdateCategoriaTask;
use App\Containers\AppSection\Categoria\UI\API\Requests\UpdateCategoriaRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class UpdateCategoriaAction extends ParentAction
{
    /**
     * @param UpdateCategoriaRequest $request
     * @return Categoria
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function run(UpdateCategoriaRequest $request): Categoria
    {
        $data = $request->validated();

        return app(UpdateCategoriaTask::class)->run($data, $request->id);
    }
}
