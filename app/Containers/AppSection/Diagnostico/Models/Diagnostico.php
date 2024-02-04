<?php

namespace App\Containers\AppSection\Diagnostico\Models;

use App\Containers\AppSection\Financiamiento\Models\Financiamiento;
use App\Containers\AppSection\Persona\Models\Persona;
use App\Ship\Parents\Models\Model as ParentModel;

class Diagnostico extends ParentModel
{
    protected $with = ['enfermedades', 'paciente', 'medico', 'financiamiento'];
    protected $fillable = [
        // 'descripcion',
        'estado',
        'observaciones',
        'user_id',
        'paciente_id',
        'medico_id',
        'financiamiento_id',
    ];

    protected $hidden = [

    ];

    protected $casts = [
        'estado' => 'boolean'
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

    public function paciente()
    {
        return $this->belongsTo(Persona::class, 'paciente_id');
    }

    public function medico()
    {
        return $this->belongsTo(Persona::class, 'medico_id');
    }

    public function financiamiento()
    {
        return $this->belongsTo(Financiamiento::class);
    }
}
