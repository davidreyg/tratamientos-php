<?php

namespace App\Containers\AppSection\Triaje\Models;

use App\Ship\Parents\Models\Model as ParentModel;

class Signo extends ParentModel
{
    public $timestamps = false;
    protected $fillable = [
        'nombre',
        'codigo',
        'unidad',
        'minimo',
        'maximo',
    ];

    protected $hidden = [

    ];

    protected $casts = [
        'estado' => 'boolean',
        'is_required' => 'boolean'
    ];

    /**
     * A resource key to be used in the serialized responses.
     */
    protected string $resourceKey = 'Signo';


    public function triajes()
    {
        return $this->belongsToMany(Triaje::class)->withPivot(['valor']);
    }
}
