<?php

namespace App\Containers\AppSection\Diagnostico\UI\API\Controllers;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Diagnostico\Actions\GetAllDiagnosticosAction;
use App\Containers\AppSection\Diagnostico\UI\API\Requests\GetAllDiagnosticosRequest;
use App\Containers\AppSection\Diagnostico\UI\API\Transformers\DiagnosticoTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllDiagnosticosController extends ApiController
{
    /**
     * @throws InvalidTransformerException
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function getAllDiagnosticos(GetAllDiagnosticosRequest $request): array
    {
        $diagnosticos = app(GetAllDiagnosticosAction::class)->run($request);

        return $this->transform($diagnosticos, DiagnosticoTransformer::class);
    }
}
