<?php

/**
 * @apiGroup           Paquete
 * @apiName            DeletePaquete
 *
 * @api                {DELETE} /v1/paquetes/:id Delete Paquete
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

use App\Containers\AppSection\Paquete\UI\API\Controllers\DeletePaqueteController;
use Illuminate\Support\Facades\Route;

Route::delete('paquetes/{id}', [DeletePaqueteController::class, 'deletePaquete'])
    ->middleware(['auth:api']);

