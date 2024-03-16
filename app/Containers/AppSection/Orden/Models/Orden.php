<?php

namespace App\Containers\AppSection\Orden\Models;

use App\Containers\AppSection\Establecimiento\Models\Establecimiento;
use App\Containers\AppSection\Examen\Models\Examen;
use App\Containers\AppSection\Paciente\Models\Paciente;
use App\Containers\AppSection\User\Models\User;
use App\Ship\Parents\Models\Model as ParentModel;

class Orden extends ParentModel
{
    protected $with = ['examens', 'paciente', 'establecimiento'];
    public static $PENDIENTE = 0;
    public static $REGISTRADO = 1;
    public static $VERIFICADO = 2;
    public $timestamps = false;
    protected $fillable = [
        'diagnostico',
        'CI10',
        'CPN',
        'EG',
        'codigo_atencion',
        'fecha_registro',
        'medico',
        'paciente_id',
        'establecimiento_id',
        'establecimiento_otro',
        'user_id',
        'registrador_id',
        'estado',
    ];

    protected $hidden = [

    ];

    protected $casts = [

    ];

    /**
     * A resource key to be used in the serialized responses.
     */
    protected string $resourceKey = 'Orden';

    public function examens()
    {
        return $this->belongsToMany(Examen::class)
            ->withPivot([
                'resultado',
                'fecha_resultado',
                'unidad_id',
                'is_canceled',
                'motivo',
            ])
            ->using(ExamenOrden::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function registrador()
    {
        return $this->belongsTo(User::class, 'registrador_id');
    }

    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }

    public function establecimiento()
    {
        return $this->belongsTo(Establecimiento::class);
    }

    public function getEstadoDetalleAttribute()
    {
        return config('appSection-orden.estados')[$this->estado];
    }
}
