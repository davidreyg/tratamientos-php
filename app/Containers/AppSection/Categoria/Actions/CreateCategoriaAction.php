<?php

namespace App\Containers\AppSection\Categoria\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\AppSection\Categoria\Models\Categoria;
use App\Containers\AppSection\Categoria\Tasks\CreateCategoriaTask;
use App\Containers\AppSection\Categoria\UI\API\Requests\CreateCategoriaRequest;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class CreateCategoriaAction extends ParentAction
{
    /**
     * @param CreateCategoriaRequest $request
     * @return Categoria
     * @throws CreateResourceFailedException
     * @throws IncorrectIdException
     */
    public function run(CreateCategoriaRequest $request): Categoria
    {
        $data = $request->validated();

        return app(CreateCategoriaTask::class)->run($data);
    }
}
