<?php

namespace App\Containers\AppSection\Financiamiento\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\AppSection\Financiamiento\Models\Financiamiento;
use App\Containers\AppSection\Financiamiento\Tasks\UpdateFinanciamientoTask;
use App\Containers\AppSection\Financiamiento\UI\API\Requests\UpdateFinanciamientoRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class UpdateFinanciamientoAction extends ParentAction
{
    /**
     * @param UpdateFinanciamientoRequest $request
     * @return Financiamiento
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function run(UpdateFinanciamientoRequest $request): Financiamiento
    {
        $data = $request->validated();

        return app(UpdateFinanciamientoTask::class)->run($data, $request->id);
    }
}
