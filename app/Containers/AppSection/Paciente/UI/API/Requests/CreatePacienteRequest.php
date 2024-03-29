<?php

namespace App\Containers\AppSection\Paciente\UI\API\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;

class CreatePacienteRequest extends ParentRequest
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
        'tipo_documento_id',
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
            'nombres' => ['required', 'string', 'max:50'],
            'apellido_paterno' => ['required', 'string', 'max:50'],
            'apellido_materno' => ['required', 'string', 'max:50'],
            'numero_documento' => ['required', 'numeric', 'integer', 'gt:0', 'unique:pacientes'],
            'fecha_nacimiento' => ['required', 'date'],
            'edad' => ['required', 'numeric', 'integer', 'gt:0'],
            'sexo' => ['required', 'in:Masculino,Femenino'],
            'direccion' => ['required', 'string', 'max:200'],
            'telefono' => ['nullable', 'numeric', 'integer', 'gt:0',],
            'historia_clinica' => ['required', 'string', 'max:50', 'unique:pacientes'],
            'tipo_documento_id' => ['required', 'exists:tipo_documentos,id'],
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
