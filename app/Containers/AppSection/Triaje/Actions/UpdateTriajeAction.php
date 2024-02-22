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
    public function __construct(
        private readonly UpdateTriajeTask $updateTriajeTask,
    ) {
    }
    /**
     * @param UpdateTriajeRequest $request
     * @return Triaje
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function run(UpdateTriajeRequest $request): Triaje
    {
        $data = $request->validated();

        $triaje = $this->updateTriajeTask->run($data, $request->id);

        //INSERTAR SIGNOS VITALES O TRIAJE :)
        // Obtener ids y valores de triaje
        $signosPivot = array_column($data['pivot'], null, 'signo_id');

        // Formato para sync
        $syncData = [];
        foreach ($signosPivot as $id => $pivot) {
            $syncData[$id] = ['valor' => $pivot['valor']];
        }

        $triaje->signos()->sync($syncData);
        return $triaje;
    }
}
