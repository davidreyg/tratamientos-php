<?php

/**
 * @apiGroup           Triaje
 * @apiName            UpdateTriaje
 *
 * @api                {PATCH} /v1/triajes/:id Update Triaje
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

use App\Containers\AppSection\Triaje\UI\API\Controllers\UpdateTriajeController;
use Illuminate\Support\Facades\Route;

Route::patch('triajes/{id}', [UpdateTriajeController::class, 'updateTriaje'])
    ->middleware(['auth:api']);

