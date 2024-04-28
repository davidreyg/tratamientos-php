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
    public function __construct(
        private readonly UpdateExamenTask $updateExamenTask,
    ) {
    }
    /**
     * @param UpdateExamenRequest $request
     * @return Examen
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function run(UpdateExamenRequest $request): Examen
    {
        $data = $request->validated();
        $examen = $this->updateExamenTask->run($data, $request->id);
        switch ($request->tipo) {
            case config('appSection-examen.tipos.respuesta'):
                $examen->unidads()->sync([]);
                $examen->respuestas()->sync($data['respuesta_ids']);
                break;

            case config('appSection-examen.tipos.unidad'):
                $examen->respuestas()->sync([]);
                $pivotData = array_column($data['pivot'], null, 'unidad_id');
                // Formato para sync
                $syncData = [];
                foreach ($pivotData as $id => $pivot) {
                    $syncData[$id] = $pivot;
                }

                //llenar los unidades
                $examen->unidads()->sync($syncData);
                break;
            case config('appSection-examen.tipos.string'):
                $examen->respuestas()->sync([]);
                $examen->unidads()->sync([]);
                break;
        }
        return $examen;
    }
}
