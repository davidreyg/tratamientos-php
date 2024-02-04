<?php

/**
 * @apiGroup           Control
 * @apiName            DeleteControl
 *
 * @api                {DELETE} /v1/controls/:id Delete Control
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

use App\Containers\AppSection\Control\UI\API\Controllers\DeleteControlController;
use Illuminate\Support\Facades\Route;

Route::delete('controls/{id}', [DeleteControlController::class, 'deleteControl'])
    ->middleware(['auth:api']);

