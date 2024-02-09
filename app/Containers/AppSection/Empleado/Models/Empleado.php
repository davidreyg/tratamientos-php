<?php

namespace App\Containers\AppSection\Empleado\Models;

use App\Containers\AppSection\Cargo\Models\Cargo;
use App\Containers\AppSection\Diagnostico\Models\Diagnostico;
use App\Containers\AppSection\Establecimiento\Models\Establecimiento;
use App\Containers\AppSection\TipoDocumento\Models\TipoDocumento;
use App\Ship\Parents\Models\Model as ParentModel;

class Empleado extends ParentModel
{
    protected $with = ['tipo_documento', 'cargo', 'establecimiento'];
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
        'cargo_id',
        'establecimiento_id',
    ];

    protected $hidden = [

    ];

    protected $casts = [

    ];

    /**
     * A resource key to be used in the serialized responses.
     */
    protected string $resourceKey = 'Empleado';

    public function tipo_documento()
    {
        return $this->belongsTo(TipoDocumento::class);
    }

    public function cargo()
    {
        return $this->belongsTo(Cargo::class);
    }

    public function establecimiento()
    {
        return $this->belongsTo(Establecimiento::class);
    }

    public function diagnosticos()
    {
        return $this->hasMany(Diagnostico::class);
    }

}
