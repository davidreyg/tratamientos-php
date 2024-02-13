<?php

/**
 * @apiGroup           RolePermission
 *
 * @apiName            GetRolePermissions
 *
 * @api                {GET} /v1/roles/:id/privilegios Get Role privilegios
 *
 * @apiVersion         1.0.0
 *
 * @apiPermission      Authenticated ['permissions' => '', 'roles' => '']
 *
 * @apiHeader          {String} accept=application/json
 * @apiHeader          {String} authorization=Bearer
 *
 * @apiParam           {String} id id of role
 *
 * @apiUse             PermissionSuccessMultipleResponse
 */

use App\Containers\AppSection\Authorization\UI\API\Controllers\GetRolePrivilegiosController;
use Illuminate\Support\Facades\Route;

Route::get('roles/{id}/privilegios', GetRolePrivilegiosController::class)
    ->middleware(['auth:api']);
