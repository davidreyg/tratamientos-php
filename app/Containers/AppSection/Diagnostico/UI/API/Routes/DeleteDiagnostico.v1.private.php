<?php

/**
 * @apiGroup           Diagnostico
 * @apiName            DeleteDiagnostico
 *
 * @api                {DELETE} /v1/diagnosticos/:id Delete Diagnostico
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

use App\Containers\AppSection\Diagnostico\UI\API\Controllers\DeleteDiagnosticoController;
use Illuminate\Support\Facades\Route;

Route::delete('diagnosticos/{id}', [DeleteDiagnosticoController::class, 'deleteDiagnostico'])
    ->middleware(['auth:api']);

