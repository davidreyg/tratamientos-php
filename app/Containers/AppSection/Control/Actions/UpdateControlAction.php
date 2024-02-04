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

        return app(UpdateControlTask::class)->run($data, $request->id);
    }
}
