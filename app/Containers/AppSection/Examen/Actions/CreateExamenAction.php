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
    public function __construct(
        private readonly CreateExamenTask $createExamenTask,
    ) {
    }
    /**
     * @param CreateExamenRequest $request
     * @return Examen
     * @throws CreateResourceFailedException
     * @throws IncorrectIdException
     */
    public function run(CreateExamenRequest $request): Examen
    {
        $data = $request->validated();

        $examen = $this->createExamenTask->run($data);

        // Obtener ids y valores de orden
        if (!empty($data['pivot'])) {
            $pivotData = array_column($data['pivot'], null, 'unidad_id');
            // Formato para sync
            $syncData = [];
            foreach ($pivotData as $id => $pivot) {
                $syncData[$id] = $pivot;
            }

            //llenar los unidades
            $examen->unidads()->sync($syncData);
        }
        if (!empty($data['respuesta_ids'])) {
            $examen->respuestas()->sync($data['respuesta_ids']);
        }

        //llenar las respuestas
        return $examen;
    }
}
