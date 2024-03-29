<?php

namespace App\Containers\AppSection\Diagnostico\Models;

use App\Containers\AppSection\Empleado\Models\Empleado;
use App\Containers\AppSection\Establecimiento\Models\Establecimiento;
use App\Containers\AppSection\Financiamiento\Models\Financiamiento;
use App\Containers\AppSection\Paciente\Models\Paciente;
use App\Containers\AppSection\User\Models\User;
use App\Ship\Parents\Models\Model as ParentModel;
use Znck\Eloquent\Traits\BelongsToThrough;

class Diagnostico extends ParentModel
{
    use BelongsToThrough;
    protected $with = ['enfermedades', 'paciente', 'medico', 'financiamiento', 'establecimiento'];
    protected $fillable = [
        'motivo_finalizacion',
        'estado',
        'observaciones',
        'user_id',
        'paciente_id',
        'empleado_id',
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
        return $this->belongsTo(Paciente::class);
    }

    public function medico()
    {
        return $this->belongsTo(Empleado::class, 'empleado_id');
    }

    public function financiamiento()
    {
        return $this->belongsTo(Financiamiento::class);
    }

    /**belongs to thorugnt */
    public function establecimiento()
    {
        return $this->belongsToThrough(Establecimiento::class, User::class);
    }
}
