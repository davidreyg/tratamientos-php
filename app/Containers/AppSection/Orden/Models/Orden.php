<?php

namespace App\Containers\AppSection\Orden\Models;

use App\Containers\AppSection\Establecimiento\Models\Establecimiento;
use App\Containers\AppSection\Examen\Models\Examen;
use App\Containers\AppSection\Item\Models\Item;
use App\Containers\AppSection\Paciente\Models\Paciente;
use App\Containers\AppSection\User\Models\User;
use App\Ship\Parents\Models\Model as ParentModel;

class Orden extends ParentModel
{
    protected $with = ['examens', 'paciente', 'establecimiento'];
    public final const PENDIENTE = 0;
    public final const REGISTRADO = 1;
    public final const VERIFICADO = 2;
    public $timestamps = false;
    protected $fillable = [
        'diagnostico',
        'CI10',
        'CPN',
        'EG',
        'codigo_atencion',
        'numero_orden',
        'fecha_registro',
        'medico',
        'paciente_id',
        'establecimiento_id',
        'establecimiento_otro',
        'user_id',
        'registrador_id',
        'verificador_id',
        'estado',
        'observaciones',
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
                'respuesta_id',
            ])
            ->using(ExamenOrden::class);
    }

    public function items()
    {
        return $this->belongsToMany(Item::class)
            ->as('item_orden')
            ->withPivot([
                'resultado',
                'unidad_id',
                'is_canceled',
                'respuesta_id',
            ])
            ->using(ItemOrden::class);
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
    // CALCULO DE SUBTOTAL Y TOTAL
    public function getTotal()
    {
        $subTotal = 0;
        $IGV = 0.18;
        $total = 0;

        // Sumamos el precio de cada examen asociado a la orden
        foreach ($this->examens as $examen) {
            $subTotal += $examen->precio;
            $total += $examen->precio;
        }

        return [
            'subTotal' => $subTotal,
            'IGV' => $IGV,
            'total' => $total,
        ];
    }
}
