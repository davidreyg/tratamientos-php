<?php

namespace App\Containers\AppSection\Control\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\AppSection\Control\Models\Control;
use App\Containers\AppSection\Control\Tasks\UpdateControlTask;
use App\Containers\AppSection\Control\UI\API\Requests\UpdateControlRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class UpdateControlAction extends ParentAction
{
    public function __construct(
        private readonly UpdateControlTask $updateControlTask,
    ) {
    }
    /**
     * @param UpdateControlRequest $request
     * @return Control
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function run(UpdateControlRequest $request): Control
    {
        $data = $request->validated();
        $control = $this->updateControlTask->run($data, $request->id);
        $control->medicamentos()->sync($request->medicamentos);
        if ($request->complicaciones) {
            $control->complicaciones()->sync($request->complicaciones);
        }
        return $control;
    }
}
