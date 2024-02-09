<?php

namespace App\Containers\AppSection\Diagnostico\UI\API\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;
use Illuminate\Database\Query\Builder;
use Illuminate\Validation\Rule;

class CreateDiagnosticoRequest extends ParentRequest
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
        // 'enfermedades.*',
        // 'financiamiento_id',
        // 'medico_id',
        // 'paciente_id',
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
    // FIXME: Mejorar la logica
    public function rules(): array
    {
        return [
            'estado' => ['required', 'boolean'],
            'observaciones' => ['nullable', 'max:100'],
            'user_id' => ['required', 'exists:users,id'],
            'financiamiento_id' => ['required', 'exists:financiamientos,id'],
            'empleado_id' => [
                'required',
                Rule::exists('empleados', 'id')->where(function (Builder $query) {
                    return $query->where('cargo_id', 1);
                }),
            ],
            'paciente_id' => ['required', 'exists:pacientes,id'],
            'enfermedades' => ['array', 'required'],
            'enfermedades.*' => ['required', 'exists:enfermedads,id']
        ];
    }

    /**
     * Prepare the data for validation.
     */
    protected function prepareForValidation(): void
    {
        $this->merge([
            'estado' => true,
            'user_id' => auth()->id(),
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
