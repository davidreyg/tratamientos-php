<?php

namespace App\Containers\AppSection\Examen\Models;

use App\Containers\AppSection\Item\Models\Item;
use App\Containers\AppSection\Orden\Models\ExamenOrden;
use App\Containers\AppSection\Orden\Models\Orden;
use App\Containers\AppSection\Unidad\Models\Unidad;
use App\Ship\Parents\Models\Model as ParentModel;
use Staudenmeir\LaravelAdjacencyList\Eloquent\HasRecursiveRelationships;

class Examen extends ParentModel
{
    // use HasRecursiveRelationships;
    protected $with = ['categoria', 'unidads', 'items'];
    public $timestamps = false;
    protected $fillable = [
        'nombre',
        'precio',
        'categoria_id',
        'is_active',
    ];

    protected $hidden = [

    ];

    protected $casts = [
        'is_active' => 'boolean'
    ];

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

    public function items()
    {
        return $this->hasMany(Item::class);
    }

    public function ordens()
    {
        return $this->belongsToMany(Orden::class)
            ->withPivot([
                'resultado',
                'fecha_resultado',
                'unidad_id',
                'is_canceled',
                'motivo',
            ])
            ->using(ExamenOrden::class);
    }
}
