<?php

/**
 * @apiGroup           Control
 * @apiName            UpdateControl
 *
 * @api                {PATCH} /v1/controls/:id Update Control
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

use App\Containers\AppSection\Control\UI\API\Controllers\UpdateControlController;
use Illuminate\Support\Facades\Route;

Route::patch('controls/{id}', [UpdateControlController::class, 'updateControl'])
    ->middleware(['auth:api']);

