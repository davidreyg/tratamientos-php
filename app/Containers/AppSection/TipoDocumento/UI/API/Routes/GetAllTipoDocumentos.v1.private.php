<?php

/**
 * @apiGroup           TipoDocumento
 * @apiName            GetAllTipoDocumentos
 *
 * @api                {GET} /v1/tipo-documentos Get All Tipo Documentos
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

use App\Containers\AppSection\TipoDocumento\UI\API\Controllers\GetAllTipoDocumentosController;
use Illuminate\Support\Facades\Route;

Route::get('tipo-documentos', [GetAllTipoDocumentosController::class, 'getAllTipoDocumentos'])
    ->middleware(['auth:api']);

