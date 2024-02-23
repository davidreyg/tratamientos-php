<?php

namespace App\Containers\AppSection\User\Actions;

use App\Containers\AppSection\Authorization\Tasks\AssignRolesToUserTask;
use App\Containers\AppSection\Authorization\Tasks\FindRoleTask;
use App\Containers\AppSection\User\Models\User;
use App\Containers\AppSection\User\Tasks\CreateUserTask;
use App\Containers\AppSection\User\UI\API\Requests\CreateUserRequest;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;
use Illuminate\Support\Facades\DB;

class CreateUserAction extends ParentAction
{
    public function __construct(
        private readonly CreateUserTask $createUserTask,
        private readonly AssignRolesToUserTask $assignRolesToUserTask
    ) {
    }

    /**
     * @throws CreateResourceFailedException
     * @throws \Throwable
     * @throws NotFoundException
     */
    public function run(CreateUserRequest $request): User
    {
        return DB::transaction(function () use ($request) {
            $user = $this->createUserTask->run($request->validated());
            $this->assignRolesToUserTask->run($user, $request->role_ids);
            return $user;
        });
    }
}