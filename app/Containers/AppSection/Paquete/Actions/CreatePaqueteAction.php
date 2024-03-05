<?php

namespace App\Containers\AppSection\Paquete\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\AppSection\Paquete\Models\Paquete;
use App\Containers\AppSection\Paquete\Tasks\CreatePaqueteTask;
use App\Containers\AppSection\Paquete\UI\API\Requests\CreatePaqueteRequest;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class CreatePaqueteAction extends ParentAction
{
    public function __construct(
        private readonly CreatePaqueteTask $createPaqueteTask,
    ) {
    }
    /**
     * @param CreatePaqueteRequest $request
     * @return Paquete
     * @throws CreateResourceFailedException
     * @throws IncorrectIdException
     */
    public function run(CreatePaqueteRequest $request): Paquete
    {
        $data = $request->validated();

        $paquete = $this->createPaqueteTask->run($data);
        $paquete->examens()->sync($request->examen_ids);
        return $paquete;
    }
}
