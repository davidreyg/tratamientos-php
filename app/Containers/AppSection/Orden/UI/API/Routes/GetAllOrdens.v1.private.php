<?php

/**
 * @apiGroup           Orden
 * @apiName            GetAllOrdens
 *
 * @api                {GET} /v1/ordens Get All Ordens
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

use App\Containers\AppSection\Orden\UI\API\Controllers\GetAllOrdensController;
use Illuminate\Support\Facades\Route;

Route::get('ordens', [GetAllOrdensController::class, 'getAllOrdens'])
    ->middleware(['auth:api']);

