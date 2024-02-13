<?php

namespace App\Containers\AppSection\Empleado\UI\API\Requests;

use App\Ship\Parents\Requests\Request as ParentRequest;

class CreateEmpleadoRequest extends ParentRequest
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
            'nombres' => ['required', 'string', 'max:50'],
            'apellido_paterno' => ['required', 'string', 'max:50'],
            'apellido_materno' => ['required', 'string', 'max:50'],
            'numero_documento' => ['required', 'numeric', 'integer', 'gt:0', 'unique:empleados'],
            'fecha_nacimiento' => ['required', 'date'],
            'edad' => ['required', 'numeric', 'integer', 'gt:0'],
            'sexo' => ['required', 'in:Masculino,Femenino'],
            'direccion' => ['required', 'string', 'max:200'],
            'telefono' => ['nullable', 'numeric', 'integer', 'gt:0',],
            // 'historia_clinica' => ['required', 'string', 'max:50', 'unique:empleados'],
            'tipo_documento_id' => ['required', 'exists:tipo_documentos,id'],
            'establecimiento_id' => ['required', 'exists:establecimientos,id'],
            'cargo_id' => ['required', 'exists:cargos,id'],
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
