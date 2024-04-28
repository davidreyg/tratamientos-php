<?php

/**
 * @apiGroup           Examen
 * @apiName            GetAllExamens
 *
 * @api                {GET} /v1/examens Get All Examens
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

use App\Containers\AppSection\Examen\UI\API\Controllers\TipoController;
use Illuminate\Support\Facades\Route;

Route::get('tipos', [TipoController::class, 'getAllTipos'])
    ->middleware(['auth:api']);

