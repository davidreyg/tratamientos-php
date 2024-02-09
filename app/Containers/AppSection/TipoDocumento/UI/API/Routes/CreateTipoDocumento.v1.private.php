<?php

/**
 * @apiGroup           TipoDocumento
 * @apiName            CreateTipoDocumento
 *
 * @api                {POST} /v1/tipo-documentos Create Tipo Documento
 * @apiDescription     Endpoint description here...
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated ['permissions' => '', 'roles' => '']
 *
 * @apiHeader          {String} accept=application/json
 * @apiHeader          {String} authorization=Bearer
 *
 * @apiParam           {String} parameters here...
 *
 * @apiSuccessExample  {json} Success-Response:
 * HTTP/1.1 200 OK
 * {
 *     // Insert the response of the request here...
 * }
 */

use App\Containers\AppSection\TipoDocumento\UI\API\Controllers\CreateTipoDocumentoController;
use Illuminate\Support\Facades\Route;

Route::post('tipo-documentos', [CreateTipoDocumentoController::class, 'createTipoDocumento'])
    ->middleware(['auth:api']);

