<?php

/**
 * @apiGroup           Cargo
 * @apiName            CreateCargo
 *
 * @api                {POST} /v1/cargos Create Cargo
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

use App\Containers\AppSection\Cargo\UI\API\Controllers\CreateCargoController;
use Illuminate\Support\Facades\Route;

Route::post('cargos', [CreateCargoController::class, 'createCargo'])
    ->middleware(['auth:api']);

