<?php

namespace App\Containers\AppSection\Examen\Actions;

use App\Containers\AppSection\Examen\Models\Examen;
use App\Containers\AppSection\Examen\Tasks\FindExamenByIdTask;
use App\Containers\AppSection\Examen\UI\API\Requests\FindExamenByIdRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class FindExamenByIdAction extends ParentAction
{
    /**
     * @throws NotFoundException
     */
    public function run(FindExamenByIdRequest $request): Examen
    {
        return app(FindExamenByIdTask::class)->run($request->id);
    }
}
