<?php

/**
 * @apiGroup           Control
 * @apiName            GetAllControls
 *
 * @api                {GET} /v1/controls Get All Controls
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

use App\Containers\AppSection\Control\UI\API\Controllers\GetAllControlsController;
use Illuminate\Support\Facades\Route;

Route::get('controls', [GetAllControlsController::class, 'getAllControls'])
    ->middleware(['auth:api']);

