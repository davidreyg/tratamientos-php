<?php

/**
 * @apiGroup           Triaje
 * @apiName            CreateTriaje
 *
 * @api                {POST} /v1/triajes Create Triaje
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

use App\Containers\AppSection\Triaje\UI\API\Controllers\CreateTriajeController;
use Illuminate\Support\Facades\Route;

Route::post('triajes', [CreateTriajeController::class, 'createTriaje'])
    ->middleware(['auth:api']);

