<?php

/**
 * @apiGroup           Diagnostico
 * @apiName            CreateDiagnostico
 *
 * @api                {POST} /v1/diagnosticos Create Diagnostico
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

use App\Containers\AppSection\Diagnostico\UI\API\Controllers\CreateDiagnosticoController;
use Illuminate\Support\Facades\Route;

Route::post('diagnosticos', [CreateDiagnosticoController::class, 'createDiagnostico'])
    ->middleware(['auth:api']);

