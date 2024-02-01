<?php

namespace App\Containers\AppSection\Establecimiento\Models;

use App\Containers\AppSection\User\Models\User;
use App\Ship\Parents\Models\Model as ParentModel;

class Establecimiento extends ParentModel
{
    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'codigo',
        'direccion',
        'telefono',
        'ris',
    ];

    protected $hidden = [

    ];

    protected $casts = [

    ];

    /**
     * A resource key to be used in the serialized responses.
     */
    protected string $resourceKey = 'Establecimiento';

    public function users()
    {
        return $this->hasMany(User::class);
    }
}