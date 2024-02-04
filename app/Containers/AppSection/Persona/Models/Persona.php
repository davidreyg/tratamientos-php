<?php

namespace App\Containers\AppSection\Persona\Models;

use App\Containers\AppSection\Diagnostico\Models\Diagnostico;
use App\Ship\Parents\Models\Model as ParentModel;

class Persona extends ParentModel
{
    protected $with = ['tipo_documento', 'tipo_persona'];
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

    /**
     * A resource key to be used in the serialized responses.
     */
    protected string $resourceKey = 'Persona';

    public function tipo_documento()
    {
        return $this->belongsTo(TipoDocumento::class);
    }
    public function tipo_persona()
    {
        return $this->belongsTo(TipoPersona::class);
    }

    public function diagnosticos()
    {
        return $this->hasMany(Diagnostico::class, 'paciente_id');
    }
}
