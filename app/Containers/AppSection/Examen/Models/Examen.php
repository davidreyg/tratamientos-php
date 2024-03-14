<?php

namespace App\Containers\AppSection\Examen\Models;

use App\Containers\AppSection\Unidad\Models\Unidad;
use App\Ship\Parents\Models\Model as ParentModel;

class Examen extends ParentModel
{
    protected $with = ['categoria', 'unidads'];
    public $timestamps = false;
    protected $fillable = [
        'nombre',
        // 'referencia',
        'unidad1',
        'unidad2',
        'precio',
        'categoria_id',
    ];

    protected $hidden = [

    ];

    protected $casts = [

    ];

    public function getUnidadesAttribute()
    {
        $unidades = [
            $this->unidad1,
            $this->unidad2,
        ];

        // Filtra las unidades para eliminar valores nulos
        $unidades = array_filter($unidades, function ($valor) {
            // Ignora nulos, vacíos y undefined
            return !empty ($valor);
        });

        return $unidades;
    }

    /**
     * A resource key to be used in the serialized responses.
     */
    protected string $resourceKey = 'Examen';

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function unidads()
    {
        return $this->belongsToMany(Unidad::class)
            ->withPivot(['minimo', 'maximo']);
    }
}
