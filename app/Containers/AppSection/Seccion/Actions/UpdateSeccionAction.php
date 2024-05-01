<?php

namespace App\Containers\AppSection\Seccion\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\AppSection\Seccion\Models\Seccion;
use App\Containers\AppSection\Seccion\Tasks\UpdateSeccionTask;
use App\Containers\AppSection\Seccion\UI\API\Requests\UpdateSeccionRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class UpdateSeccionAction extends ParentAction
{
    /**
     * @param UpdateSeccionRequest $request
     * @return Seccion
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function run(UpdateSeccionRequest $request): Seccion
    {
        $data = $request->validated();

        return app(UpdateSeccionTask::class)->run($data, $request->id);
    }
}
