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
    /**
     * @param CreateOrdenRequest $request
     * @return Orden
     * @throws CreateResourceFailedException
     * @throws IncorrectIdException
     */
    public function run(CreateOrdenRequest $request): Orden
    {
        $data = $request->validated();

        return app(CreateOrdenTask::class)->run($data);
    }
}
