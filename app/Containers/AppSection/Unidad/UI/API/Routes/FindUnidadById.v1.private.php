<?php

/**
 * @apiGroup           Unidad
 * @apiName            FindUnidadById
 *
 * @api                {GET} /v1/unidads/:id Find Unidad By Id
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

use App\Containers\AppSection\Unidad\UI\API\Controllers\FindUnidadByIdController;
use Illuminate\Support\Facades\Route;

Route::get('unidads/{id}', [FindUnidadByIdController::class, 'findUnidadById'])
    ->middleware(['auth:api']);

