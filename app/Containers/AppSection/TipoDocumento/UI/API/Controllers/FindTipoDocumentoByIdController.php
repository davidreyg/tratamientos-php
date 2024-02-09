<?php

namespace App\Containers\AppSection\TipoDocumento\UI\API\Controllers;

use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\TipoDocumento\Actions\FindTipoDocumentoByIdAction;
use App\Containers\AppSection\TipoDocumento\UI\API\Requests\FindTipoDocumentoByIdRequest;
use App\Containers\AppSection\TipoDocumento\UI\API\Transformers\TipoDocumentoTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\ApiController;

class FindTipoDocumentoByIdController extends ApiController
{
    /**
     * @throws InvalidTransformerException|NotFoundException
     */
    public function findTipoDocumentoById(FindTipoDocumentoByIdRequest $request): array
    {
        $tipodocumento = app(FindTipoDocumentoByIdAction::class)->run($request);

        return $this->transform($tipodocumento, TipoDocumentoTransformer::class);
    }
}
