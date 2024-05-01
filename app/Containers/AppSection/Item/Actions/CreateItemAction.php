<?php

namespace App\Containers\AppSection\Item\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\AppSection\Item\Models\Item;
use App\Containers\AppSection\Item\Tasks\CreateItemTask;
use App\Containers\AppSection\Item\UI\API\Requests\CreateItemRequest;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class CreateItemAction extends ParentAction
{
    public function __construct(
        private readonly CreateItemTask $createItemTask,
    ) {
    }
    /**
     * @param CreateItemRequest $request
     * @return Item
     * @throws CreateResourceFailedException
     * @throws IncorrectIdException
     */
    public function run(CreateItemRequest $request): Item
    {
        $data = $request->validated();

        $item = $this->createItemTask->run($data);

        // Obtener ids y valores de orden
        if (!empty($data['pivot'])) {
            $pivotData = array_column($data['pivot'], null, 'unidad_id');
            // Formato para sync
            $syncData = [];
            foreach ($pivotData as $id => $pivot) {
                $syncData[$id] = $pivot;
            }

            //llenar los unidades
            $item->unidads()->sync($syncData);
        }
        if (!empty($data['respuesta_ids'])) {
            $item->respuestas()->sync($data['respuesta_ids']);
        }

        //llenar las respuestas
        return $item;
    }
}
