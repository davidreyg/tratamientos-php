<?php

/**
 * @apiGroup           Empleado
 * @apiName            FindEmpleadoById
 *
 * @api                {GET} /v1/empleados/:id Find Empleado By Id
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

use App\Containers\AppSection\Empleado\UI\API\Controllers\FindEmpleadoByIdController;
use Illuminate\Support\Facades\Route;

Route::get('empleados/{id}', [FindEmpleadoByIdController::class, 'findEmpleadoById'])
    ->middleware(['auth:api']);

