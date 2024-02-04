<?php

namespace App\Containers\AppSection\Control\UI\API\Controllers;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Control\Models\Medicamento;
use App\Containers\AppSection\Control\UI\API\Transformers\MedicamentoTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllMedicamentosController extends ApiController
{
    /**
     * @throws InvalidTransformerException
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function getAll(): array
    {
        $medicamentos = Medicamento::all();

        return $this->transform($medicamentos, MedicamentoTransformer::class);
    }
}
