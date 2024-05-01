<?php

namespace App\Containers\AppSection\Item\Models;

use App\Containers\AppSection\Examen\Models\Examen;
use App\Containers\AppSection\Respuesta\Models\Respuesta;
use App\Containers\AppSection\Seccion\Models\Seccion;
use App\Containers\AppSection\Unidad\Models\Unidad;
use App\Ship\Parents\Models\Model as ParentModel;

class Item extends ParentModel
{
    protected $with = ['unidads', 'respuestas', 'seccion'];
    public $timestamps = false;
    protected $fillable = [
        'codigo',
        'nombre',
        'seccion_id',
        'examen_id',
        'tipo',
    ];

    protected $hidden = [

    ];

    protected $casts = [

    ];

    /**
     * A resource key to be used in the serialized responses.
     */
    protected string $resourceKey = 'Item';

    public function unidads()
    {
        return $this->belongsToMany(Unidad::class)
            ->withPivot(['minimo', 'maximo']);
    }

    public function respuestas()
    {
        return $this->belongsToMany(Respuesta::class)
            ->as('examen_respuesta');
    }

    public function seccion()
    {
        return $this->belongsTo(Seccion::class);
    }

    public function examen()
    {
        return $this->belongsTo(Examen::class);
    }

}
