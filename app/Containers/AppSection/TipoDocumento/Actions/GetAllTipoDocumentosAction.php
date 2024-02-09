<?php

namespace App\Containers\AppSection\TipoDocumento\Actions;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\AppSection\TipoDocumento\Tasks\GetAllTipoDocumentosTask;
use App\Containers\AppSection\TipoDocumento\UI\API\Requests\GetAllTipoDocumentosRequest;
use App\Ship\Parents\Actions\Action as ParentAction;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllTipoDocumentosAction extends ParentAction
{
    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(GetAllTipoDocumentosRequest $request): mixed
    {
        return app(GetAllTipoDocumentosTask::class)->run();
    }
}
