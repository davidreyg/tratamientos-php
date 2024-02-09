<?php

namespace App\Containers\AppSection\Cargo\Models;

use App\Ship\Parents\Models\Model as ParentModel;

class Cargo extends ParentModel
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
    protected string $resourceKey = 'Cargo';
}
