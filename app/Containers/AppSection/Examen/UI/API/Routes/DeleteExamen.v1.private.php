<?php

/**
 * @apiGroup           Examen
 * @apiName            DeleteExamen
 *
 * @api                {DELETE} /v1/examens/:id Delete Examen
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

use App\Containers\AppSection\Examen\UI\API\Controllers\ExamenController;
use Illuminate\Support\Facades\Route;

Route::delete('examens/{id}', [ExamenController::class, 'deleteExamen'])
    ->middleware(['auth:api']);

