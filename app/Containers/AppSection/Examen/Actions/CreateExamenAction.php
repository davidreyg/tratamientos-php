<?php

namespace App\Containers\AppSection\Examen\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\AppSection\Examen\Models\Examen;
use App\Containers\AppSection\Examen\Tasks\CreateExamenTask;
use App\Containers\AppSection\Examen\UI\API\Requests\CreateExamenRequest;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class CreateExamenAction extends ParentAction
{
    /**
     * @param CreateExamenRequest $request
     * @return Examen
     * @throws CreateResourceFailedException
     * @throws IncorrectIdException
     */
    public function run(CreateExamenRequest $request): Examen
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(CreateExamenTask::class)->run($data);
    }
}
