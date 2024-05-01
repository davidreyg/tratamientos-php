<?php

namespace App\Containers\AppSection\Item\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\AppSection\Item\Models\Item;
use App\Containers\AppSection\Item\Tasks\UpdateItemTask;
use App\Containers\AppSection\Item\UI\API\Requests\UpdateItemRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class UpdateItemAction extends ParentAction
{
    public function __construct(
        private readonly UpdateItemTask $updateItemTask,
    ) {
    }
    /**
     * @param UpdateItemRequest $request
     * @return Item
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function run(UpdateItemRequest $request): Item
    {
        $data = $request->validated();
        $item = $this->updateItemTask->run($data, $request->id);
        switch ($request->tipo) {
            case config('appSection-examen.tipos.respuesta'):
                $item->unidads()->sync([]);
                $item->respuestas()->sync($data['respuesta_ids']);
                break;

            case config('appSection-examen.tipos.unidad'):
                $item->respuestas()->sync([]);
                $pivotData = array_column($data['pivot'], null, 'unidad_id');
                // Formato para sync
                $syncData = [];
                foreach ($pivotData as $id => $pivot) {
                    $syncData[$id] = $pivot;
                }

                //llenar los unidades
                $item->unidads()->sync($syncData);
                break;
            case config('appSection-examen.tipos.string'):
                $item->respuestas()->sync([]);
                $item->unidads()->sync([]);
                break;
        }
        return $item;
    }
}
