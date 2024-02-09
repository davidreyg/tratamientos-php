<?php

namespace App\Containers\AppSection\TipoDocumento\UI\API\Controllers;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\TipoDocumento\Actions\GetAllTipoDocumentosAction;
use App\Containers\AppSection\TipoDocumento\UI\API\Requests\GetAllTipoDocumentosRequest;
use App\Containers\AppSection\TipoDocumento\UI\API\Transformers\TipoDocumentoTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllTipoDocumentosController extends ApiController
{
    /**
     * @throws InvalidTransformerException
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function getAllTipoDocumentos(GetAllTipoDocumentosRequest $request): array
    {
        $tipodocumentos = app(GetAllTipoDocumentosAction::class)->run($request);

        return $this->transform($tipodocumentos, TipoDocumentoTransformer::class);
    }
}
