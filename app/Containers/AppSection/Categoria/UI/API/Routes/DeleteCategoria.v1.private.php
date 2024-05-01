<?php

/**
 * @apiGroup           Categoria
 * @apiName            DeleteCategoria
 *
 * @api                {DELETE} /v1/categorias/:id Delete Categoria
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

use App\Containers\AppSection\Categoria\UI\API\Controllers\DeleteCategoriaController;
use Illuminate\Support\Facades\Route;

Route::delete('categorias/{id}', [DeleteCategoriaController::class, 'deleteCategoria'])
    ->middleware(['auth:api']);

