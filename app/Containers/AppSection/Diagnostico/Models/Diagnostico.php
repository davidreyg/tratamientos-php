<?php

namespace App\Containers\AppSection\Diagnostico\Models;

use App\Ship\Parents\Models\Model as ParentModel;

class Diagnostico extends ParentModel
{
    protected $fillable = [
        'descripcion',
        // 'fecha',
        'observaciones',
        'user_id',
        'paciente_id',
        'medico_id',
        'financiamiento_id',
    ];

    protected $hidden = [

    ];

    protected $casts = [

    ];

    /**
     * A resource key to be used in the serialized responses.
     */
    protected string $resourceKey = 'Diagnostico';


    public function enfermedades()
    {
        return $this->belongsToMany(Enfermedad::class)
            ->using(DiagnosticoEnfermedad::class);
    }
}
