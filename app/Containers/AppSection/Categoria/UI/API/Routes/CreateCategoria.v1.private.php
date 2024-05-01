<?php

/**
 * @apiGroup           Categoria
 * @apiName            CreateCategoria
 *
 * @api                {POST} /v1/categorias Create Categoria
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

use App\Containers\AppSection\Categoria\UI\API\Controllers\CreateCategoriaController;
use Illuminate\Support\Facades\Route;

Route::post('categorias', [CreateCategoriaController::class, 'createCategoria'])
    ->middleware(['auth:api']);

