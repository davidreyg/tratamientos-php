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
    /**
     * @param CreateControlRequest $request
     * @return Control
     * @throws CreateResourceFailedException
     * @throws IncorrectIdException
     */
    public function run(CreateControlRequest $request): Control
    {
        $data = $request->validated();

        return app(CreateControlTask::class)->run($data);
    }
}
