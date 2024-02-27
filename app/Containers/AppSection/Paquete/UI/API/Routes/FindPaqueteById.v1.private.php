<?php

/**
 * @apiGroup           Paquete
 * @apiName            FindPaqueteById
 *
 * @api                {GET} /v1/paquetes/:id Find Paquete By Id
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

use App\Containers\AppSection\Paquete\UI\API\Controllers\FindPaqueteByIdController;
use Illuminate\Support\Facades\Route;

Route::get('paquetes/{id}', [FindPaqueteByIdController::class, 'findPaqueteById'])
    ->middleware(['auth:api']);

