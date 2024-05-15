<?php

namespace App\Containers\AppSection\Orden\UI\API\Requests;

use App\Containers\AppSection\Orden\Models\Orden;
use App\Ship\Parents\Requests\Request as ParentRequest;

class UpdateOrdenRequest extends ParentRequest
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
            'diagnostico' => ['required'],
            'CI10' => ['nullable'],
            'CPN' => ['nullable'],
            'EG' => ['nullable'],
            'codigo_atencion' => ['required'],
            'numero_orden' => ['required', 'numeric', 'integer'],
            'fecha_registro' => ['required', 'date'],
            'medico' => ['required'],
            'examen_ids' => ['array', 'required'],
            'examen_ids.*' => ['required', 'exists:examens,id'],
            'item_ids' => ['array', 'nullable'],
            'item_ids.*' => ['required', 'exists:items,id'],
            'paciente_id' => ['required', 'exists:pacientes,id'],
            'establecimiento_id' => ['nullable', 'exists:establecimientos,id'],
            'establecimiento_otro' => ['nullable', 'max:100'],
            'user_id' => ['required', 'exists:users,id'],
            'estado' => ['required', 'numeric'],
        ];
    }
    protected function prepareForValidation(): void
    {
        $this->merge([
            // 'estado' => true,
            'user_id' => auth()->id(),
            'estado' => Orden::PENDIENTE,
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
