<?php

namespace App\Containers\AppSection\TipoDocumento\Actions;

use Apiato\Core\Exceptions\IncorrectIdException;
use App\Containers\AppSection\TipoDocumento\Models\TipoDocumento;
use App\Containers\AppSection\TipoDocumento\Tasks\UpdateTipoDocumentoTask;
use App\Containers\AppSection\TipoDocumento\UI\API\Requests\UpdateTipoDocumentoRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class UpdateTipoDocumentoAction extends ParentAction
{
    /**
     * @param UpdateTipoDocumentoRequest $request
     * @return TipoDocumento
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function run(UpdateTipoDocumentoRequest $request): TipoDocumento
    {
        $data = $request->validated();

        return app(UpdateTipoDocumentoTask::class)->run($data, $request->id);
    }
}
