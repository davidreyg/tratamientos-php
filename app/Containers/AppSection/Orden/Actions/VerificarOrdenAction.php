<?php

namespace App\Containers\AppSection\Orden\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\AppSection\Orden\Models\Orden;
use App\Containers\AppSection\Orden\Tasks\UpdateOrdenTask;
use App\Containers\AppSection\Orden\UI\API\Requests\VerificarOrdenRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class VerificarOrdenAction extends ParentAction
{
    /**
     * @param VerificarOrdenRequest $request
     * @return Orden
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function run(VerificarOrdenRequest $request): Orden
    {
        $data = $request->validated();

        $orden = Orden::findOrFail($request->id);
        $examenOrdenesCompletados = $orden->examens->filter(function ($examenOrden) {
            return $examenOrden->pivot->is_completed;
        });
        if ($examenOrdenesCompletados->count() !== $orden->examens->count()) {
            throw new UpdateResourceFailedException('Faltan completar los examenes.');
        }

        return app(UpdateOrdenTask::class)->run($data, $request->id);
    }
}
