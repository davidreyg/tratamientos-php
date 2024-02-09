<?php

namespace App\Containers\AppSection\TipoDocumento\Actions;

use App\Containers\AppSection\TipoDocumento\Tasks\DeleteTipoDocumentoTask;
use App\Containers\AppSection\TipoDocumento\UI\API\Requests\DeleteTipoDocumentoRequest;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class DeleteTipoDocumentoAction extends ParentAction
{
    /**
     * @param DeleteTipoDocumentoRequest $request
     * @return int
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function run(DeleteTipoDocumentoRequest $request): int
    {
        return app(DeleteTipoDocumentoTask::class)->run($request->id);
    }
}
