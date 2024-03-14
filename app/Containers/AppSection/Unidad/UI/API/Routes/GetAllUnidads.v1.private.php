<?php

/**
 * @apiGroup           Unidad
 * @apiName            GetAllUnidads
 *
 * @api                {GET} /v1/unidads Get All Unidads
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

use App\Containers\AppSection\Unidad\UI\API\Controllers\GetAllUnidadsController;
use Illuminate\Support\Facades\Route;

Route::get('unidads', [GetAllUnidadsController::class, 'getAllUnidads'])
    ->middleware(['auth:api']);

