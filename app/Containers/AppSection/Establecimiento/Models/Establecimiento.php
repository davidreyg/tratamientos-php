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
        'has_lab',
    ];

    protected $hidden = [

    ];

    protected $casts = [
        'has_lab' => 'boolean'
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
