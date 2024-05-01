<?php

namespace App\Containers\AppSection\Seccion\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\AppSection\Seccion\Models\Seccion;
use App\Containers\AppSection\Seccion\Tasks\CreateSeccionTask;
use App\Containers\AppSection\Seccion\UI\API\Requests\CreateSeccionRequest;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class CreateSeccionAction extends ParentAction
{
    /**
     * @param CreateSeccionRequest $request
     * @return Seccion
     * @throws CreateResourceFailedException
     * @throws IncorrectIdException
     */
    public function run(CreateSeccionRequest $request): Seccion
    {
        $data = $request->validated();

        return app(CreateSeccionTask::class)->run($data);
    }
}
