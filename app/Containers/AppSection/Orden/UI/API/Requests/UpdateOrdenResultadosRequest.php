<?php

namespace App\Containers\AppSection\Orden\UI\API\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;
use Illuminate\Validation\Rule;

class UpdateOrdenResultadosRequest extends ParentRequest
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
        $rules = [
            'observaciones' => ['nullable', 'max:255'],
            'pivot' => ['array', 'required'],
            'pivot.*.is_canceled' => ['required', 'boolean',],
            'pivot.*.fecha_resultado' => ['required', 'date',],
            'pivot.*.examen_id' => ['required', 'exists:examens,id'],
            'pivot.*.resultado' => ['sometimes', 'nullable', 'numeric', 'gt:0'],
            'pivot.*.motivo' => ['sometimes', 'nullable', 'max:100'],
            'pivot.*.unidad_id' => ['sometimes', 'nullable', 'exists:unidads,id'],

            'item_orden.*.item_id' => ['required', 'exists:items,id'],
            'item_orden.*.resultado' => ['sometimes', 'nullable', 'numeric', 'gt:0'],
            'item_orden.*.unidad_id' => ['sometimes', 'nullable', 'exists:unidads,id'],
            'item_orden.*.is_canceled' => ['required', 'boolean',],
        ];
        return $rules;
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
