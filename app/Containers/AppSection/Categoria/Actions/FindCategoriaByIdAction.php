<?php

namespace App\Containers\AppSection\Categoria\Actions;

use App\Containers\AppSection\Categoria\Models\Categoria;
use App\Containers\AppSection\Categoria\Tasks\FindCategoriaByIdTask;
use App\Containers\AppSection\Categoria\UI\API\Requests\FindCategoriaByIdRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class FindCategoriaByIdAction extends ParentAction
{
    /**
     * @throws NotFoundException
     */
    public function run(FindCategoriaByIdRequest $request): Categoria
    {
        return app(FindCategoriaByIdTask::class)->run($request->id);
    }
}
