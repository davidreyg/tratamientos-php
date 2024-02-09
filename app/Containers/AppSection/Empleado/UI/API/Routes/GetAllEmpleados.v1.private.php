<?php

/**
 * @apiGroup           Empleado
 * @apiName            GetAllEmpleados
 *
 * @api                {GET} /v1/empleados Get All Empleados
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

use App\Containers\AppSection\Empleado\UI\API\Controllers\GetAllEmpleadosController;
use Illuminate\Support\Facades\Route;

Route::get('empleados', [GetAllEmpleadosController::class, 'getAllEmpleados'])
    ->middleware(['auth:api']);

