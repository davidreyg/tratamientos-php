<?php

/**
 * @apiGroup           Reporte
 * @apiName            GetAllReportes
 *
 * @api                {GET} /v1/reportes Get All Reportes
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

use App\Containers\AppSection\Reporte\UI\API\Controllers\GetConteoExamensController;
use Illuminate\Support\Facades\Route;

Route::post(
    'excel/conteo-examens',
    [GetConteoExamensController::class, 'exportToExcel']
)->middleware(['auth:api']);

