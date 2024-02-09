<?php

/**
 * @apiGroup           TipoDocumento
 * @apiName            UpdateTipoDocumento
 *
 * @api                {PATCH} /v1/tipo-documentos/:id Update Tipo Documento
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

use App\Containers\AppSection\TipoDocumento\UI\API\Controllers\UpdateTipoDocumentoController;
use Illuminate\Support\Facades\Route;

Route::patch('tipo-documentos/{id}', [UpdateTipoDocumentoController::class, 'updateTipoDocumento'])
    ->middleware(['auth:api']);

