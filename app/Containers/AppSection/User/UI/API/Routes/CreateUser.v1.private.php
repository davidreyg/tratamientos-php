<?php

/**
 * @apiGroup           User
 * @apiName            CreateUser
 *
 * @api                {POST} /v1/users Create User
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

use App\Containers\AppSection\User\UI\API\Controllers\CreateUserController;
use Illuminate\Support\Facades\Route;

Route::post('users', CreateUserController::class)->middleware(['auth:api']);

