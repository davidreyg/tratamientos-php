<?php

/**
 * @apiGroup           Authorization
 * @apiName            ConfirmCurrentPassword
 *
 * @api                {POST} /v1/confirm-current-password Confirm Current Password
 * @apiDescription     Endpoint description here...
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated ['permissions' => '', 'roles' => '']
 *
 * @apiHeader          {String} accept=application/json
 * @apiHeader          {String} authorization=Bearer
 *
 *
 * @apiSuccessExample  {json} Success-Response:
 * HTTP/1.1 200 OK
 * {
 *     // Insert the response of the request here...
 * }
 */

use App\Containers\AppSection\Authorization\UI\API\Controllers\ConfirmCurrentPasswordController;
use Illuminate\Support\Facades\Route;

Route::post('confirm-current-password', ConfirmCurrentPasswordController::class)
    ->middleware(['auth:api']);

