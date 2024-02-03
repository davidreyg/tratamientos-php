<?php

namespace App\Containers\AppSection\Diagnostico\UI\API\Controllers;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Diagnostico\Models\Enfermedad;
use App\Containers\AppSection\Diagnostico\UI\API\Transformers\EnfermedadTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllEnfermedadesController extends ApiController
{
    /**
     * @throws InvalidTransformerException
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function getAllEnfermedades(): array
    {
        $enfermedades = Enfermedad::all();

        return $this->transform($enfermedades, EnfermedadTransformer::class);
    }
}
