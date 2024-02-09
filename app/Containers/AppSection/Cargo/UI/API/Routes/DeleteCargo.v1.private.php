<?php

/**
 * @apiGroup           Cargo
 * @apiName            DeleteCargo
 *
 * @api                {DELETE} /v1/cargos/:id Delete Cargo
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

use App\Containers\AppSection\Cargo\UI\API\Controllers\DeleteCargoController;
use Illuminate\Support\Facades\Route;

Route::delete('cargos/{id}', [DeleteCargoController::class, 'deleteCargo'])
    ->middleware(['auth:api']);

