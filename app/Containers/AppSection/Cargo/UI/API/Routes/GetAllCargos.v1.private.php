<?php

/**
 * @apiGroup           Cargo
 * @apiName            GetAllCargos
 *
 * @api                {GET} /v1/cargos Get All Cargos
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

use App\Containers\AppSection\Cargo\UI\API\Controllers\GetAllCargosController;
use Illuminate\Support\Facades\Route;

Route::get('cargos', [GetAllCargosController::class, 'getAllCargos'])
    ->middleware(['auth:api']);

