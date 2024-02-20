<?php

namespace App\Containers\AppSection\User\UI\API\Requests;

use App\Containers\AppSection\Authorization\Traits\IsResourceOwnerTrait;
use App\Ship\Parents\Requests\Request as ParentRequest;

class CreateUserRequest extends ParentRequest
{
    use IsResourceOwnerTrait;

    /**
     * Define which Roles and/or Permissions has access to this request.
     */
    protected array $access = [
        'permissions' => 'create-users',
        'roles' => '',
    ];

    /**
     * Id's that needs decoding before applying the validation rules.
     */
    protected array $decode = [
        // 'id',
    ];

    /**
     * Defining the URL parameters (`/stores/999/items`) allows applying
     * validation rules on them and allows accessing them like request data.
     */
    protected array $urlParameters = [
        // 'id',
    ];

    public function rules(): array
    {
        return [
            'name' => 'required|min:2|max:50',
            'nombre_completo' => ['required', 'min:2'],
            'password' => ['required', 'min:5'],
            'establecimiento_id' => ['required', 'exists:establecimientos,id'],
            'cargo' => ['required', 'min:2'],
            'role_ids' => ['nullable', 'array'],
            'role_ids.*' => ['required', 'exists:roles,id'],
        ];
    }

    public function authorize(): bool
    {
        return $this->check([
            'hasAccess',
        ]);
    }
}
