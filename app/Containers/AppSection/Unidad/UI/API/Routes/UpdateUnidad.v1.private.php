<?php

/**
 * @apiGroup           Unidad
 * @apiName            UpdateUnidad
 *
 * @api                {PATCH} /v1/unidads/:id Update Unidad
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

use App\Containers\AppSection\Unidad\UI\API\Controllers\UpdateUnidadController;
use Illuminate\Support\Facades\Route;

Route::patch('unidads/{id}', [UpdateUnidadController::class, 'updateUnidad'])
    ->middleware(['auth:api']);

