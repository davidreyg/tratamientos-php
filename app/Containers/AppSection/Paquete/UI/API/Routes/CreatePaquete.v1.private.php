<?php

/**
 * @apiGroup           Paquete
 * @apiName            CreatePaquete
 *
 * @api                {POST} /v1/paquetes Create Paquete
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

use App\Containers\AppSection\Paquete\UI\API\Controllers\CreatePaqueteController;
use Illuminate\Support\Facades\Route;

Route::post('paquetes', [CreatePaqueteController::class, 'createPaquete'])
    ->middleware(['auth:api']);

