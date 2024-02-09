<?php

namespace App\Containers\AppSection\TipoDocumento\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\AppSection\TipoDocumento\Models\TipoDocumento;
use App\Containers\AppSection\TipoDocumento\Tasks\CreateTipoDocumentoTask;
use App\Containers\AppSection\TipoDocumento\UI\API\Requests\CreateTipoDocumentoRequest;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class CreateTipoDocumentoAction extends ParentAction
{
    /**
     * @param CreateTipoDocumentoRequest $request
     * @return TipoDocumento
     * @throws CreateResourceFailedException
     * @throws IncorrectIdException
     */
    public function run(CreateTipoDocumentoRequest $request): TipoDocumento
    {
        $data = $request->validated();

        return app(CreateTipoDocumentoTask::class)->run($data);
    }
}
