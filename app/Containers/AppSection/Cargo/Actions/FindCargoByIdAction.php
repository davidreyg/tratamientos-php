<?php

namespace App\Containers\AppSection\Cargo\Actions;

use App\Containers\AppSection\Cargo\Models\Cargo;
use App\Containers\AppSection\Cargo\Tasks\FindCargoByIdTask;
use App\Containers\AppSection\Cargo\UI\API\Requests\FindCargoByIdRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class FindCargoByIdAction extends ParentAction
{
    /**
     * @throws NotFoundException
     */
    public function run(FindCargoByIdRequest $request): Cargo
    {
        return app(FindCargoByIdTask::class)->run($request->id);
    }
}
