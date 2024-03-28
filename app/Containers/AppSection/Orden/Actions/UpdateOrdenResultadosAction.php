<?php

namespace App\Containers\AppSection\Orden\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\AppSection\Orden\Models\Orden;
use App\Containers\AppSection\Orden\Tasks\UpdateOrdenTask;
use App\Containers\AppSection\Orden\UI\API\Requests\UpdateOrdenResultadosRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class UpdateOrdenResultadosAction extends ParentAction
{
    public function __construct(
        private readonly UpdateOrdenTask $updateOrdenTask,
    ) {
    }
    /**
     * @param UpdateOrdenResultadosRequest $request
     * @return Orden
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function run(UpdateOrdenResultadosRequest $request): Orden
    {
        $data = $request->validated();

        $orden = $this->updateOrdenTask->run($data, $request->id);

        // Obtener ids y valores de orden
        $pivotData = array_column($data['pivot'], null, 'examen_id');


        // Formato para sync
        $syncData = [];
        foreach ($pivotData as $id => $pivot) {
            $syncData[$id] = $pivot;
            if ($pivot['is_canceled']) {
                $syncData[$id]['resultado'] = null;
                $syncData[$id]['unidad_id'] = null;
            } else {
                $syncData[$id]['motivo'] = null;

            }
        }

        if (!empty($data['item_orden'])) {
            $itemsData = array_column($data['item_orden'], null, 'item_id');
            $syncDataItem = [];
            foreach ($itemsData as $id => $pivot) {
                $syncDataItem[$id] = $pivot;
                if ($pivot['is_canceled']) {
                    $syncDataItem[$id]['resultado'] = null;
                    $syncDataItem[$id]['unidad_id'] = null;
                } else {
                    // $syncDataItem[$id]['motivo'] = null;

                }
            }

            $orden->items()->sync($syncDataItem);
        }
        // dd($syncData);
        $orden->examens()->sync($syncData);

        return $orden;
    }
}
