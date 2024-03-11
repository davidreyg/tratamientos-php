<?php

namespace App\Containers\AppSection\Orden\Models;

use App\Containers\AppSection\Examen\Models\Examen;
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
        'medico',
        'paciente_id',
        'establecimiento_id',
        'establecimiento_otro',
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

    public function examens()
    {
        return $this->belongsToMany(Examen::class);
    }
}
