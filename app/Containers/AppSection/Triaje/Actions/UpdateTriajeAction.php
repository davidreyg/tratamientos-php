<?php

namespace App\Containers\AppSection\Triaje\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\AppSection\Triaje\Models\Triaje;
use App\Containers\AppSection\Triaje\Tasks\UpdateTriajeTask;
use App\Containers\AppSection\Triaje\UI\API\Requests\UpdateTriajeRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class UpdateTriajeAction extends ParentAction
{
    /**
     * @param UpdateTriajeRequest $request
     * @return Triaje
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function run(UpdateTriajeRequest $request): Triaje
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(UpdateTriajeTask::class)->run($data, $request->id);
    }
}
