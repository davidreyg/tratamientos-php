<?php

namespace App\Containers\AppSection\Control\Models;

use App\Ship\Parents\Models\Model as ParentModel;

class Control extends ParentModel
{
    public $timestamps = false;
    protected $fillable = [
        'fecha_inicio',
        'fecha_fin',
        'estado',
        'medico_id',
        'diagnostico_id',
    ];

    protected $hidden = [

    ];

    protected $casts = [

    ];

    /**
     * A resource key to be used in the serialized responses.
     */
    protected string $resourceKey = 'Control';
}
