<?php

namespace App\Containers\AppSection\Diagnostico\UI\API\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;
use Illuminate\Database\Query\Builder;
use Illuminate\Validation\Rule;

class UpdateDiagnosticoRequest extends ParentRequest
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
            'estado' => ['required', 'boolean'],
            'observaciones' => ['nullable', 'max:100'],
            'user_id' => ['required', 'exists:users,id'],
            'financiamiento_id' => ['required', 'exists:financiamientos,id'],
            'medico_id' => [
                'required',
                Rule::exists('personas', 'id')->where(function (Builder $query) {
                    return $query->where('id', 1);
                }),
            ],
            'paciente_id' => [
                'required',
                Rule::exists('personas', 'id')->where(function (Builder $query) {
                    return $query->where('id', 2);
                }),
            ],
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
