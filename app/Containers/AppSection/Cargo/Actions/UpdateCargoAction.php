<?php

namespace App\Containers\AppSection\Cargo\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\AppSection\Cargo\Models\Cargo;
use App\Containers\AppSection\Cargo\Tasks\UpdateCargoTask;
use App\Containers\AppSection\Cargo\UI\API\Requests\UpdateCargoRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class UpdateCargoAction extends ParentAction
{
    /**
     * @param UpdateCargoRequest $request
     * @return Cargo
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function run(UpdateCargoRequest $request): Cargo
    {
        $data = $request->validated();

        return app(UpdateCargoTask::class)->run($data, $request->id);
    }
}
