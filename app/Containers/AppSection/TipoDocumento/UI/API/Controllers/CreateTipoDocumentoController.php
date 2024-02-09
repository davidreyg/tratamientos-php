<?php

namespace App\Containers\AppSection\TipoDocumento\UI\API\Controllers;

use Apiato\Core\Exceptions\IncorrectIdException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\TipoDocumento\Actions\CreateTipoDocumentoAction;
use App\Containers\AppSection\TipoDocumento\UI\API\Requests\CreateTipoDocumentoRequest;
use App\Containers\AppSection\TipoDocumento\UI\API\Transformers\TipoDocumentoTransformer;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class CreateTipoDocumentoController extends ApiController
{
    /**
     * @param CreateTipoDocumentoRequest $request
     * @return JsonResponse
     * @throws CreateResourceFailedException
     * @throws InvalidTransformerException
     * @throws IncorrectIdException
     */
    public function createTipoDocumento(CreateTipoDocumentoRequest $request): JsonResponse
    {
        $tipodocumento = app(CreateTipoDocumentoAction::class)->run($request);

        return $this->created($this->transform($tipodocumento, TipoDocumentoTransformer::class));
    }
}
