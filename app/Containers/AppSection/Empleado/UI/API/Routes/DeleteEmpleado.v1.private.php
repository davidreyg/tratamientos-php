<?php

/**
 * @apiGroup           Empleado
 * @apiName            DeleteEmpleado
 *
 * @api                {DELETE} /v1/empleados/:id Delete Empleado
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

use App\Containers\AppSection\Empleado\UI\API\Controllers\DeleteEmpleadoController;
use Illuminate\Support\Facades\Route;

Route::delete('empleados/{id}', [DeleteEmpleadoController::class, 'deleteEmpleado'])
    ->middleware(['auth:api']);

