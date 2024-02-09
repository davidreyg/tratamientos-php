<?php

namespace App\Containers\AppSection\TipoDocumento\UI\API\Controllers;

use App\Containers\AppSection\TipoDocumento\Actions\DeleteTipoDocumentoAction;
use App\Containers\AppSection\TipoDocumento\UI\API\Requests\DeleteTipoDocumentoRequest;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class DeleteTipoDocumentoController extends ApiController
{
    /**
     * @param DeleteTipoDocumentoRequest $request
     * @return JsonResponse
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function deleteTipoDocumento(DeleteTipoDocumentoRequest $request): JsonResponse
    {
        app(DeleteTipoDocumentoAction::class)->run($request);

        return $this->noContent();
    }
}
