<?php

namespace App\Containers\AppSection\Establecimiento\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\AppSection\Establecimiento\Models\Establecimiento;
use App\Containers\AppSection\Establecimiento\Tasks\UpdateEstablecimientoTask;
use App\Containers\AppSection\Establecimiento\UI\API\Requests\UpdateEstablecimientoRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class UpdateEstablecimientoAction extends ParentAction
{
    /**
     * @param UpdateEstablecimientoRequest $request
     * @return Establecimiento
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function run(UpdateEstablecimientoRequest $request): Establecimiento
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(UpdateEstablecimientoTask::class)->run($data, $request->id);
    }
}
