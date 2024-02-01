<?php

namespace App\Containers\AppSection\Diagnostico\UI\API\Controllers;

use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Diagnostico\Actions\FindDiagnosticoByIdAction;
use App\Containers\AppSection\Diagnostico\UI\API\Requests\FindDiagnosticoByIdRequest;
use App\Containers\AppSection\Diagnostico\UI\API\Transformers\DiagnosticoTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\ApiController;

class FindDiagnosticoByIdController extends ApiController
{
    /**
     * @throws InvalidTransformerException|NotFoundException
     */
    public function findDiagnosticoById(FindDiagnosticoByIdRequest $request): array
    {
        $diagnostico = app(FindDiagnosticoByIdAction::class)->run($request);

        return $this->transform($diagnostico, DiagnosticoTransformer::class);
    }
}
