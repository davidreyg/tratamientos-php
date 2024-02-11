<?php

/**
 * @apiGroup           RolePermission
 *
 * @apiName            GetAllPrivilegios
 *
 * @api                {get} /v1/privilegios Get All privilegios
 *
 * @apiVersion         1.0.0
 *
 * @apiPermission      Authenticated ['permissions' => 'manage-privilegios', 'roles' => '']
 *
 * @apiHeader          {String} accept=application/json
 * @apiHeader          {String} authorization=Bearer
 *
 * @apiUse             RoleSuccessMultipleResponse
 */

use App\Containers\AppSection\Authorization\UI\API\Controllers\GetAllPrivilegiosController;
use Illuminate\Support\Facades\Route;

Route::get('privilegios', GetAllPrivilegiosController::class)
    ->middleware(['auth:api']);
