<?php

namespace App\Containers\AppSection\Paquete\Models;

use App\Containers\AppSection\Examen\Models\Examen;
use App\Ship\Parents\Models\Model as ParentModel;

class Paquete extends ParentModel
{
    protected $with = ['examens'];
    public $timestamps = false;
    protected $fillable = [
        'nombre'
    ];

    protected $hidden = [

    ];

    protected $casts = [

    ];

    /**
     * A resource key to be used in the serialized responses.
     */
    protected string $resourceKey = 'Paquete';

    public function examens()
    {
        return $this->belongsToMany(Examen::class);
    }
}
