<?php

namespace App\Containers\AppSection\Establecimiento\UI\API\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;

class CreateEstablecimientoRequest extends ParentRequest
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
        // 'id',
    ];

    /**
     * Defining the URL parameters (e.g, `/user/{id}`) allows applying
     * validation rules on them and allows accessing them like request data.
     */
    protected array $urlParameters = [
        // 'id',
    ];

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'nombre' => ['required', 'string', 'max:60'],
            'codigo' => ['required', 'numeric', 'unique:establecimientos'],
            'direccion' => ['required', 'string', 'max:60',],
            'telefono' => ['nullable', 'numeric', 'integer', 'gt:0'],
            'ris' => ['required', 'string', 'max:60'],
            'has_lab' => ['required', 'boolean'],
        ];
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
