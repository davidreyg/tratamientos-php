<?php

namespace App\Containers\AppSection\Orden\Models;

use App\Ship\Parents\Models\Model as ParentModel;

class Orden extends ParentModel
{
    public $timestamps = false;
    protected $fillable = [
        'diagnostico',
        'CI10',
        'CPN',
        'EG',
        'codigo_atencion',
        'fecha_registro',
        'paciente_id',
        'empleado_id',
        'user_id',
    ];

    protected $hidden = [

    ];

    protected $casts = [

    ];

    /**
     * A resource key to be used in the serialized responses.
     */
    protected string $resourceKey = 'Orden';
}
