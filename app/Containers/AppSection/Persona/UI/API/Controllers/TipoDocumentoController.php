<?php

namespace App\Containers\AppSection\Persona\UI\API\Controllers;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use Apiato\Core\Exceptions\InvalidTransformerException;
use App\Containers\AppSection\Persona\Models\TipoDocumento;
use App\Containers\AppSection\Persona\UI\API\Transformers\TipoDocumentoTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Prettus\Repository\Exceptions\RepositoryException;

class TipoDocumentoController extends ApiController
{
    /**
     * @return array
     * @throws InvalidTransformerException
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function getAll(): array
    {
        $tipo_documentos = TipoDocumento::all();

        return $this->transform($tipo_documentos, TipoDocumentoTransformer::class);
    }
}
