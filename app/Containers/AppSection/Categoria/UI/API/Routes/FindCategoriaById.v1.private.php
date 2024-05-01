<?php

/**
 * @apiGroup           Categoria
 * @apiName            FindCategoriaById
 *
 * @api                {GET} /v1/categorias/:id Find Categoria By Id
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

use App\Containers\AppSection\Categoria\UI\API\Controllers\FindCategoriaByIdController;
use Illuminate\Support\Facades\Route;

Route::get('categorias/{id}', [FindCategoriaByIdController::class, 'findCategoriaById'])
    ->middleware(['auth:api']);

