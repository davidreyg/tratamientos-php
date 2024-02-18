<?php

namespace App\Containers\AppSection\Control\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\AppSection\Control\Models\Control;
use App\Containers\AppSection\Control\Tasks\CreateControlTask;
use App\Containers\AppSection\Control\UI\API\Requests\CreateControlRequest;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class CreateControlAction extends ParentAction
{

    public function __construct(
        private readonly CreateControlTask $createControlTask,
    ) {
    }
    /**
     * @param CreateControlRequest $request
     * @return Control
     * @throws CreateResourceFailedException
     * @throws IncorrectIdException
     */
    public function run(CreateControlRequest $request): Control
    {
        $data = $request->validated();
        $control = $this->createControlTask->run($data);
        $control->medicamentos()->sync($request->medicamentos);
        //INSERTAR SIGNOS VITALES O TRIAJE :)
        // Obtener ids y valores de triaje
        $triajeIds = array_column($data['triaje'], 'id');
        $triajePivots = array_column($data['triaje'], null, 'id');

        // Formato para sync
        $syncData = [];
        foreach ($triajePivots as $id => $pivot) {
            $syncData[$id] = ['valor' => $pivot['valor']];
        }
        $control->signos()->sync($syncData);
        if ($request->complicaciones) {
            $control->complicaciones()->sync($request->complicaciones);
        }
        return $control;
    }
}
