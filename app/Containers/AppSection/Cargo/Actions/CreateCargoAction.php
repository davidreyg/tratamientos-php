<?php

namespace App\Containers\AppSection\Cargo\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\AppSection\Cargo\Models\Cargo;
use App\Containers\AppSection\Cargo\Tasks\CreateCargoTask;
use App\Containers\AppSection\Cargo\UI\API\Requests\CreateCargoRequest;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class CreateCargoAction extends ParentAction
{
    /**
     * @param CreateCargoRequest $request
     * @return Cargo
     * @throws CreateResourceFailedException
     * @throws IncorrectIdException
     */
    public function run(CreateCargoRequest $request): Cargo
    {
        $data = $request->validated();

        return app(CreateCargoTask::class)->run($data);
    }
}
