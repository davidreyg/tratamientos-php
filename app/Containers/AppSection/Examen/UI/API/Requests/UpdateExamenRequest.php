<?php

namespace App\Containers\AppSection\Examen\UI\API\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;
use Illuminate\Validation\Rule;

class UpdateExamenRequest extends ParentRequest
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
            'nombre' => ['required', 'string'],
            'codigo' => [
                'required',
                'numeric',
                Rule::unique('examens')->ignore($this->id)
            ],
            'precio' => ['required', 'numeric'],
            'categoria_id' => ['required', 'exists:categorias,id'],
            'is_active' => ['required', 'boolean'],
            'tipo' => ['required', 'string'],
            'pivot' => ['sometimes', 'array'],

            'pivot.*.unidad_id' => ['sometimes', 'nullable', 'exists:unidads,id'],
            'pivot.*.minimo' => ['sometimes', 'numeric', 'gt:0'],
            'pivot.*.maximo' => ['sometimes', 'numeric', 'gt:0'],
            'respuesta_ids' => ['sometimes', 'array'],
            'respuesta_ids.*' => ['required', 'exists:respuestas,id'],
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
