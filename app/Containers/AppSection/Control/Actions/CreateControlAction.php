<?php

namespace App\Containers\AppSection\Control\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\AppSection\Control\Models\Control;
use App\Containers\AppSection\Control\Tasks\CreateControlTask;
use App\Containers\AppSection\Control\UI\API\Requests\CreateControlRequest;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class CreateControlAction extends ParentAction
{

    public function __construct(
        private readonly CreateControlTask $createControlTask,
    ) {
    }
    /**
     * @param CreateControlRequest $request
     * @return Control
     * @throws CreateResourceFailedException
     * @throws IncorrectIdException
     */
    public function run(CreateControlRequest $request): Control
    {
        $data = $request->validated();
        $control = $this->createControlTask->run($data);
        $control->medicamentos()->sync($request->medicamentos);

        if ($request->complicaciones) {
            $control->complicaciones()->sync($request->complicaciones);
        }
        return $control;
    }
}
