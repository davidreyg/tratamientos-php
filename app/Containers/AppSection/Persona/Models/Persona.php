<?php

namespace App\Containers\AppSection\Persona\Models;

use App\Ship\Parents\Models\Model as ParentModel;

class Persona extends ParentModel
{

    public $timestamps = false;
    protected $fillable = [
        'nombres',
        'apellido_paterno',
        'apellido_materno',
        'numero_documento',
        'fecha_nacimiento',
        'edad',
        'sexo',
        'direccion',
        'telefono',
        'historia_clinica',
    ];

    protected $hidden = [

    ];

    protected $casts = [

    ];

    /**
     * A resource key to be used in the serialized responses.
     */
    protected string $resourceKey = 'Persona';
}
