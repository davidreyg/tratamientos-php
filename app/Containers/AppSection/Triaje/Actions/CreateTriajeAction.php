<?php

namespace App\Containers\AppSection\Triaje\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\AppSection\Triaje\Models\Triaje;
use App\Containers\AppSection\Triaje\Tasks\CreateTriajeTask;
use App\Containers\AppSection\Triaje\UI\API\Requests\CreateTriajeRequest;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class CreateTriajeAction extends ParentAction
{
    public function __construct(
        private readonly CreateTriajeTask $createTriajeTask,
    ) {
    }
    /**
     * @param CreateTriajeRequest $request
     * @return Triaje
     * @throws CreateResourceFailedException
     * @throws IncorrectIdException
     */
    public function run(CreateTriajeRequest $request): Triaje
    {
        $data = $request->validated();

        $triaje = $this->createTriajeTask->run($data);

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
