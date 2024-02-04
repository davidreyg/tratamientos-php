<?php

/**
 * @apiGroup           Control
 * @apiName            FindControlById
 *
 * @api                {GET} /v1/controls/:id Find Control By Id
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

use App\Containers\AppSection\Control\UI\API\Controllers\FindControlByIdController;
use Illuminate\Support\Facades\Route;

Route::get('controls/{id}', [FindControlByIdController::class, 'findControlById'])
    ->middleware(['auth:api']);

