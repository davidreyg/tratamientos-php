<?php

namespace App\Containers\AppSection\Orden\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\AppSection\Orden\Models\Orden;
use App\Containers\AppSection\Orden\Tasks\UpdateOrdenTask;
use App\Containers\AppSection\Orden\UI\API\Requests\UpdateOrdenRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class UpdateOrdenAction extends ParentAction
{
    public function __construct(
        private readonly UpdateOrdenTask $updateOrdenTask,
    ) {
    }
    /**
     * @param UpdateOrdenRequest $request
     * @return Orden
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function run(UpdateOrdenRequest $request): Orden
    {
        $data = $request->validated();

        $orden = $this->updateOrdenTask->run($data, $request->id);
        $orden->examens()->sync($request->examen_ids);
        $orden->items()->sync($request->item_ids);
        return $orden;
    }
}
