<?php

/**
 * @apiGroup           Respuesta
 * @apiName            GetAllRespuestas
 *
 * @api                {GET} /v1/respuestas Get All Respuestas
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

use App\Containers\AppSection\Respuesta\UI\API\Controllers\GetAllRespuestasController;
use Illuminate\Support\Facades\Route;

Route::get('respuestas', [GetAllRespuestasController::class, 'getAllRespuestas'])
    ->middleware(['auth:api']);

