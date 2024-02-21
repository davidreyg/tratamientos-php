<?php

namespace App\Containers\AppSection\Triaje\Models;

use App\Containers\AppSection\User\Models\User;
use App\Ship\Parents\Models\Model as ParentModel;

class Triaje extends ParentModel
{
    protected $with = ['signos'];
    public $timestamps = false;
    protected $fillable = [
        'fecha_registro',
        'user_id',
        'paciente_id'
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
        return $this->belongsToMany(Signo::class)->withPivot(['valor']);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
