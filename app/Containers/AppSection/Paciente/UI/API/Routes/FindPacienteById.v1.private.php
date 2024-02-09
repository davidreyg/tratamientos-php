<?php

/**
 * @apiGroup           Paciente
 * @apiName            FindPacienteById
 *
 * @api                {GET} /v1/pacientes/:id Find Paciente By Id
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

use App\Containers\AppSection\Paciente\UI\API\Controllers\FindPacienteByIdController;
use Illuminate\Support\Facades\Route;

Route::get('pacientes/{id}', [FindPacienteByIdController::class, 'findPacienteById'])
    ->middleware(['auth:api']);

