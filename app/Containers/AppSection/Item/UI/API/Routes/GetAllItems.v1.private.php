<?php

/**
 * @apiGroup           Item
 * @apiName            GetAllItems
 *
 * @api                {GET} /v1/items Get All Items
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

use App\Containers\AppSection\Item\UI\API\Controllers\GetAllItemsController;
use Illuminate\Support\Facades\Route;

Route::get('items', [GetAllItemsController::class, 'getAllItems'])
    ->middleware(['auth:api']);

