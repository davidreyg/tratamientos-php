<?php

namespace App\Containers\AppSection\Financiamiento\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\AppSection\Financiamiento\Models\Financiamiento;
use App\Containers\AppSection\Financiamiento\Tasks\CreateFinanciamientoTask;
use App\Containers\AppSection\Financiamiento\UI\API\Requests\CreateFinanciamientoRequest;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class CreateFinanciamientoAction extends ParentAction
{
    /**
     * @param CreateFinanciamientoRequest $request
     * @return Financiamiento
     * @throws CreateResourceFailedException
     * @throws IncorrectIdException
     */
    public function run(CreateFinanciamientoRequest $request): Financiamiento
    {
        $data = $request->validated();

        return app(CreateFinanciamientoTask::class)->run($data);
    }
}
