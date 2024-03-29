<?php

/**
 * @apiGroup           Paciente
 * @apiName            GetAllPacientes
 *
 * @api                {GET} /v1/pacientes Get All Pacientes
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

use App\Containers\AppSection\Paciente\UI\API\Controllers\GetAllPacientesController;
use Illuminate\Support\Facades\Route;

Route::get('pacientes', [GetAllPacientesController::class, 'getAllPacientes'])
    ->middleware(['auth:api']);

