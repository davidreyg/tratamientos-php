<?php

namespace App\Containers\AppSection\Control\Models;

use App\Ship\Parents\Models\Model as ParentModel;

class Medicamento extends ParentModel
{
    public $timestamps = false;
    protected $fillable = [
        'nombre',
    ];

    protected $hidden = [

    ];

    protected $casts = [

    ];

    /**
     * A resource key to be used in the serialized responses.
     */
    protected string $resourceKey = 'Medicamento';
}
