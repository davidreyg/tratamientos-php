<?php

namespace App\Containers\AppSection\Triaje\Models;

use App\Ship\Parents\Models\Model as ParentModel;

class Triaje extends ParentModel
{
    public $timestamps = false;
    protected $fillable = [

    ];

    protected $hidden = [

    ];

    protected $casts = [

    ];

    /**
     * A resource key to be used in the serialized responses.
     */
    protected string $resourceKey = 'Triaje';

    public function signos()
    {
        return $this->belongsToMany(Signo::class)->withPivotValue(['valor']);
    }
}
