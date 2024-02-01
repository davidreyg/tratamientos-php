<?php

namespace App\Containers\AppSection\Persona\Models;

use App\Ship\Parents\Models\Model as ParentModel;

class TipoPersona extends ParentModel
{
    public $timestamps = false;
    protected $fillable = [
        'nombre',
    ];
    /**
     * A resource key to be used in the serialized responses.
     */
    protected string $resourceKey = 'TipoPersona';
}
