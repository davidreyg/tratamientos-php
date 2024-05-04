<?php

namespace App\Containers\AppSection\Unidad\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\AppSection\Unidad\Models\Unidad;
use App\Containers\AppSection\Unidad\Tasks\CreateUnidadTask;
use App\Containers\AppSection\Unidad\UI\API\Requests\CreateUnidadRequest;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class CreateUnidadAction extends ParentAction
{
    /**
     * @param CreateUnidadRequest $request
     * @return Unidad
     * @throws CreateResourceFailedException
     * @throws IncorrectIdException
     */
    public function run(CreateUnidadRequest $request): Unidad
    {
        $data = $request->validated();

        return app(CreateUnidadTask::class)->run($data);
    }
}
