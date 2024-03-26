<?php

namespace App\Containers\AppSection\Orden\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\AppSection\Orden\Models\Orden;
use App\Containers\AppSection\Orden\Tasks\CreateOrdenTask;
use App\Containers\AppSection\Orden\UI\API\Requests\CreateOrdenRequest;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class CreateOrdenAction extends ParentAction
{
    public function __construct(
        private readonly CreateOrdenTask $createOrdenTask,
    ) {
    }
    /**
     * @param CreateOrdenRequest $request
     * @return Orden
     * @throws CreateResourceFailedException
     * @throws IncorrectIdException
     */
    public function run(CreateOrdenRequest $request): Orden
    {
        $data = $request->validated();

        $orden = $this->createOrdenTask->run($data);
        $orden->examens()->sync($request->examen_ids);
        $orden->items()->sync($request->item_ids);
        return $orden;
    }
}
