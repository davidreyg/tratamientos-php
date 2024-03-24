<?php

/**
 * @apiGroup           Item
 * @apiName            DeleteItem
 *
 * @api                {DELETE} /v1/items/:id Delete Item
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

use App\Containers\AppSection\Item\UI\API\Controllers\DeleteItemController;
use Illuminate\Support\Facades\Route;

Route::delete('items/{id}', [DeleteItemController::class, 'deleteItem'])
    ->middleware(['auth:api']);

