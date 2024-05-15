<?php

/**
 * @apiGroup           Orden
 * @apiName            UpdateOrden
 *
 * @api                {PATCH} /v1/ordens/:id Update Orden
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

use App\Containers\AppSection\Orden\UI\API\Controllers\DescargarResultadosController;
use Illuminate\Support\Facades\Route;

Route::get('ordens/{id}/resultados-pdf', [DescargarResultadosController::class, 'updateOrden']);

