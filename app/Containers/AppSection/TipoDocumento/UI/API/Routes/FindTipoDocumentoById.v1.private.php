<?php

/**
 * @apiGroup           TipoDocumento
 * @apiName            FindTipoDocumentoById
 *
 * @api                {GET} /v1/tipo-documentos/:id Find Tipo Documento By Id
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

use App\Containers\AppSection\TipoDocumento\UI\API\Controllers\FindTipoDocumentoByIdController;
use Illuminate\Support\Facades\Route;

Route::get('tipo-documentos/{id}', [FindTipoDocumentoByIdController::class, 'findTipoDocumentoById'])
    ->middleware(['auth:api']);

