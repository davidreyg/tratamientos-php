<?php

/**
 * @apiGroup           Item
 * @apiName            FindItemById
 *
 * @api                {GET} /v1/items/:id Find Item By Id
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

use App\Containers\AppSection\Item\UI\API\Controllers\FindItemByIdController;
use Illuminate\Support\Facades\Route;

Route::get('items/{id}', [FindItemByIdController::class, 'findItemById'])
    ->middleware(['auth:api']);

