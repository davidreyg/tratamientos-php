<?php

namespace App\Containers\AppSection\TipoDocumento\Models;

use App\Ship\Parents\Models\Model as ParentModel;

class TipoDocumento extends ParentModel
{

    public $timestamps = false;
    protected $fillable = [
        'nombre',
        'digitos',
    ];

    protected $hidden = [

    ];

    protected $casts = [

    ];

    /**
     * A resource key to be used in the serialized responses.
     */
    protected string $resourceKey = 'TipoDocumento';
}
