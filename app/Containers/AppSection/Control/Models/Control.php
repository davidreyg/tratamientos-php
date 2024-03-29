<?php

namespace App\Containers\AppSection\Control\Models;

use App\Containers\AppSection\Diagnostico\Models\Diagnostico;
use App\Containers\AppSection\Empleado\Models\Empleado;
use App\Containers\AppSection\Persona\Models\Persona;
use App\Containers\AppSection\Triaje\Models\Triaje;
use App\Ship\Parents\Models\Model as ParentModel;

class Control extends ParentModel
{
    protected $with = ['medicamentos', 'complicaciones', 'medico', 'diagnostico', 'triaje'];
    public $timestamps = false;
    protected $fillable = [
        'fecha_inicio',
        'fecha_fin',
        'observaciones',
        'empleado_id',
        'diagnostico_id',
        'triaje_id',
    ];

    protected $hidden = [

    ];

    protected $casts = [

    ];

    /**
     * A resource key to be used in the serialized responses.
     */
    protected string $resourceKey = 'Control';

    public function medicamentos()
    {
        return $this->belongsToMany(Medicamento::class)
            ->using(ControlMedicamento::class);
    }

    public function complicaciones()
    {
        return $this->belongsToMany(Complicacion::class)
            ->using(ComplicacionControl::class);
    }

    public function medico()
    {
        return $this->belongsTo(Empleado::class, 'empleado_id');
    }

    public function diagnostico()
    {
        return $this->belongsTo(Diagnostico::class);
    }

    public function triaje()
    {
        return $this->belongsTo(Triaje::class);
    }
}
