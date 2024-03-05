<?php

namespace App\Containers\AppSection\Examen\Models;

use App\Ship\Parents\Models\Model as ParentModel;

class Examen extends ParentModel
{
    protected $with = ['categoria'];
    public $timestamps = false;
    protected $fillable = [
        'nombre',
        // 'referencia',
        'unidad',
        'precio',
        'categoria_id',
    ];

    protected $hidden = [

    ];

    protected $casts = [

    ];

    /**
     * A resource key to be used in the serialized responses.
     */
    protected string $resourceKey = 'Examen';

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}