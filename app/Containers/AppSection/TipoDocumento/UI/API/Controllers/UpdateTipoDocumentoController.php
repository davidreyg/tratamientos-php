<?php

namespace App\Containers\AppSection\TipoDocumento\UI\API\Controllers;

use Apiato\Core\Exceptions\IncorrectIdException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\TipoDocumento\Actions\UpdateTipoDocumentoAction;
use App\Containers\AppSection\TipoDocumento\UI\API\Requests\UpdateTipoDocumentoRequest;
use App\Containers\AppSection\TipoDocumento\UI\API\Transformers\TipoDocumentoTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;

class UpdateTipoDocumentoController extends ApiController
{
    /**
     * @param UpdateTipoDocumentoRequest $request
     * @return array
     * @throws InvalidTransformerException
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function updateTipoDocumento(UpdateTipoDocumentoRequest $request): array
    {
        $tipodocumento = app(UpdateTipoDocumentoAction::class)->run($request);

        return $this->transform($tipodocumento, TipoDocumentoTransformer::class);
    }
}
