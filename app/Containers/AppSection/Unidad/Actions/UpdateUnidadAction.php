<?php

namespace App\Containers\AppSection\Unidad\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\AppSection\Unidad\Models\Unidad;
use App\Containers\AppSection\Unidad\Tasks\UpdateUnidadTask;
use App\Containers\AppSection\Unidad\UI\API\Requests\UpdateUnidadRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class UpdateUnidadAction extends ParentAction
{
    /**
     * @param UpdateUnidadRequest $request
     * @return Unidad
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function run(UpdateUnidadRequest $request): Unidad
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(UpdateUnidadTask::class)->run($data, $request->id);
    }
}
