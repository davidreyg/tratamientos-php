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
    public function __construct(
        private readonly UpdatePaqueteTask $updatePaqueteTask,
    ) {
    }
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

        $paquete = $this->updatePaqueteTask->run($data, $request->id);
        $paquete->examens()->sync($request->examen_ids);
        return $paquete;
    }
}
