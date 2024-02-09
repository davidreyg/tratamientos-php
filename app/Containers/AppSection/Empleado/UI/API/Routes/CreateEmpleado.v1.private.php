<?php

/**
 * @apiGroup           Empleado
 * @apiName            CreateEmpleado
 *
 * @api                {POST} /v1/empleados Create Empleado
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

use App\Containers\AppSection\Empleado\UI\API\Controllers\CreateEmpleadoController;
use Illuminate\Support\Facades\Route;

Route::post('empleados', [CreateEmpleadoController::class, 'createEmpleado'])
    ->middleware(['auth:api']);

