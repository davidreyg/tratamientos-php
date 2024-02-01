<?php

/**
 * @apiGroup           Persona
 * @apiName            CreatePersona
 *
 * @api                {POST} /v1/personas Create Persona
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

use App\Containers\AppSection\Persona\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::post('personas', [Controller::class, 'createPersona'])
    ->middleware(['auth:api']);

