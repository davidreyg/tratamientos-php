<?php

/**
 * @apiGroup           Cargo
 * @apiName            FindCargoById
 *
 * @api                {GET} /v1/cargos/:id Find Cargo By Id
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

use App\Containers\AppSection\Cargo\UI\API\Controllers\FindCargoByIdController;
use Illuminate\Support\Facades\Route;

Route::get('cargos/{id}', [FindCargoByIdController::class, 'findCargoById'])
    ->middleware(['auth:api']);

