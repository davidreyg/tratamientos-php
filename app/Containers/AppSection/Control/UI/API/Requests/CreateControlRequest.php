<?php

namespace App\Containers\AppSection\Control\UI\API\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;
use Illuminate\Database\Query\Builder;
use Illuminate\Validation\Rule;

class CreateControlRequest extends ParentRequest
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
        'diagnostico_id',
        'medicamentos.*',
        'medico_id',
        'complicaciones.*',
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
            'observaciones' => ['nullable', 'string', 'max:100'],
            'diagnostico_id' => ['required', 'exists:diagnosticos,id'],
            'fecha_inicio' => ['required', 'date'],
            'fecha_fin' => ['required', 'date'],
            'empleado_id' => [
                'required',
                Rule::exists('empleados', 'id')->where(function (Builder $query) {
                    return $query->where('cargo_id', 1);
                }),
            ],
            'medicamentos' => ['array', 'required'],
            'medicamentos.*' => ['required', 'exists:medicamentos,id'],
            'complicaciones' => ['array', 'nullable'],
            'complicaciones.*' => ['required', 'exists:complicacions,id'],
            'triaje' => ['array', 'required'],
            'triaje.*.id' => ['required', 'exists:signos,id'],
            'triaje.*.valor' => ['required', 'numeric', 'gt:0'],
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
