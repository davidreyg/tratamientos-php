<?php

/**
 * @apiGroup           Establecimiento
 * @apiName            CreateEstablecimiento
 *
 * @api                {POST} /v1/establecimientos Create Establecimiento
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

use App\Containers\AppSection\Establecimiento\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::post('establecimientos', [Controller::class, 'createEstablecimiento'])
    ->middleware(['auth:api']);

