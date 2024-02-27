<?php

namespace App\Containers\AppSection\Paquete\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\AppSection\Paquete\Models\Paquete;
use App\Containers\AppSection\Paquete\Tasks\UpdatePaqueteTask;
use App\Containers\AppSection\Paquete\UI\API\Requests\UpdatePaqueteRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class UpdatePaqueteAction extends ParentAction
{
    /**
     * @param UpdatePaqueteRequest $request
     * @return Paquete
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function run(UpdatePaqueteRequest $request): Paquete
    {
        $data = $request->validated();

        return app(UpdatePaqueteTask::class)->run($data, $request->id);
    }
}
