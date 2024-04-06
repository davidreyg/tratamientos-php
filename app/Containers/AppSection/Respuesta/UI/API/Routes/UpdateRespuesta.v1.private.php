<?php

/**
 * @apiGroup           Respuesta
 * @apiName            UpdateRespuesta
 *
 * @api                {PATCH} /v1/respuestas/:id Update Respuesta
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

use App\Containers\AppSection\Respuesta\UI\API\Controllers\UpdateRespuestaController;
use Illuminate\Support\Facades\Route;

Route::patch('respuestas/{id}', [UpdateRespuestaController::class, 'updateRespuesta'])
    ->middleware(['auth:api']);

