<?php

/**
 * @apiGroup           Financiamiento
 * @apiName            CreateFinanciamiento
 *
 * @api                {POST} /v1/financiamientos Create Financiamiento
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

use App\Containers\AppSection\Financiamiento\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::post('financiamientos', [Controller::class, 'createFinanciamiento'])
    ->middleware(['auth:api']);

