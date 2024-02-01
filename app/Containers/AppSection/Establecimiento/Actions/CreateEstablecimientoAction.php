<?php

namespace App\Containers\AppSection\Establecimiento\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\AppSection\Establecimiento\Models\Establecimiento;
use App\Containers\AppSection\Establecimiento\Tasks\CreateEstablecimientoTask;
use App\Containers\AppSection\Establecimiento\UI\API\Requests\CreateEstablecimientoRequest;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class CreateEstablecimientoAction extends ParentAction
{
    /**
     * @param CreateEstablecimientoRequest $request
     * @return Establecimiento
     * @throws CreateResourceFailedException
     * @throws IncorrectIdException
     */
    public function run(CreateEstablecimientoRequest $request): Establecimiento
    {
        $data = $request->validated();

        return app(CreateEstablecimientoTask::class)->run($data);
    }
}
