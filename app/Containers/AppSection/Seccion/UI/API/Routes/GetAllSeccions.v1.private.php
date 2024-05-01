<?php

/**
 * @apiGroup           Seccion
 * @apiName            GetAllSeccions
 *
 * @api                {GET} /v1/seccions Get All Seccions
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

use App\Containers\AppSection\Seccion\UI\API\Controllers\GetAllSeccionsController;
use Illuminate\Support\Facades\Route;

Route::get('seccions', [GetAllSeccionsController::class, 'getAllSeccions'])
    ->middleware(['auth:api']);

