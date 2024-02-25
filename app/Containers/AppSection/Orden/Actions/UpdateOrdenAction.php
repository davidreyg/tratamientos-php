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

        return app(UpdateOrdenTask::class)->run($data, $request->id);
    }
}
