<?php

namespace App\Containers\AppSection\Orden\UI\API\Requests;

use App\Containers\AppSection\Orden\Models\Orden;
use App\Ship\Parents\Requests\Request as ParentRequest;

class RegistrarOrdenRequest extends ParentRequest
{
    /**
     * Define which Roles and/or Permissions has access to this request.
     */
    protected array $access = [
        'permissions' => '',
        'roles' => '',
    ];

    /**
     * Id's that needs decoding before applying the validation rules.
     */
    protected array $decode = [
        'id',
    ];

    /**
     * Defining the URL parameters (e.g, `/user/{id}`) allows applying
     * validation rules on them and allows accessing them like request data.
     */
    protected array $urlParameters = [
        'id',
    ];

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'estado' => ['required', 'numeric', 'integer', 'gt:0'],
            'registrador_id' => ['required', 'exists:users,id',],
        ];
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'estado' => Orden::$REGISTRADO,
            'registrador_id' => auth()->id(),
        ]);
    }
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->check([
            'hasAccess',
        ]);
    }
}
