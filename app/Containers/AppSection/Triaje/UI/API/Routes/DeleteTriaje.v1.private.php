<?php

/**
 * @apiGroup           Triaje
 * @apiName            DeleteTriaje
 *
 * @api                {DELETE} /v1/triajes/:id Delete Triaje
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

use App\Containers\AppSection\Triaje\UI\API\Controllers\DeleteTriajeController;
use Illuminate\Support\Facades\Route;

Route::delete('triajes/{id}', [DeleteTriajeController::class, 'deleteTriaje'])
    ->middleware(['auth:api']);

