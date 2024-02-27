<?php

namespace App\Containers\AppSection\Examen\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\AppSection\Examen\Models\Examen;
use App\Containers\AppSection\Examen\Tasks\UpdateExamenTask;
use App\Containers\AppSection\Examen\UI\API\Requests\UpdateExamenRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class UpdateExamenAction extends ParentAction
{
    /**
     * @param UpdateExamenRequest $request
     * @return Examen
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function run(UpdateExamenRequest $request): Examen
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(UpdateExamenTask::class)->run($data, $request->id);
    }
}
