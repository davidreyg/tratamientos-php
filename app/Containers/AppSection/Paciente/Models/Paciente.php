<?php

namespace App\Containers\AppSection\Paciente\Models;

use App\Containers\AppSection\Diagnostico\Models\Diagnostico;
use App\Containers\AppSection\TipoDocumento\Models\TipoDocumento;
use App\Ship\Parents\Models\Model as ParentModel;

class Paciente extends ParentModel
{
    protected $with = ['tipo_documento'];
    public $timestamps = false;
    protected $fillable = [
        'nombres',
        'apellido_paterno',
        'apellido_materno',
        'numero_documento',
        'fecha_nacimiento',
        'edad',
        'sexo',
        'direccion',
        'telefono',
        'historia_clinica',
        'tipo_documento_id',
        'tipo_persona_id',
    ];


    protected $hidden = [

    ];

    protected $casts = [

    ];

    public function getNombreCompletoAttribute()
    {
        return $this->nombres . ' ' . $this->apellido_paterno . ' ' . $this->apellido_materno;
    }

    /**
     * A resource key to be used in the serialized responses.
     */
    protected string $resourceKey = 'Paciente';

    public function tipo_documento()
    {
        return $this->belongsTo(TipoDocumento::class);
    }

    public function diagnosticos()
    {
        return $this->hasMany(Diagnostico::class);
    }
}
