<?php

/**
 * @apiGroup           Persona
 * @apiName            GetAllMedicos
 *
 * @api                {GET} /v1/medicos Get All Medicos
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

use App\Containers\AppSection\Persona\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('medicos', [Controller::class, 'getAllMedicos'])
    ->middleware(['auth:api']);

