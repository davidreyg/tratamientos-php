<?php

namespace App\Containers\AppSection\TipoDocumento\Actions;

use App\Containers\AppSection\TipoDocumento\Models\TipoDocumento;
use App\Containers\AppSection\TipoDocumento\Tasks\FindTipoDocumentoByIdTask;
use App\Containers\AppSection\TipoDocumento\UI\API\Requests\FindTipoDocumentoByIdRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class FindTipoDocumentoByIdAction extends ParentAction
{
    /**
     * @throws NotFoundException
     */
    public function run(FindTipoDocumentoByIdRequest $request): TipoDocumento
    {
        return app(FindTipoDocumentoByIdTask::class)->run($request->id);
    }
}
