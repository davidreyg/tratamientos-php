<?php

namespace App\Containers\AppSection\Orden\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class ExamenOrden extends Pivot
{
    public function getIsCompletedAttribute()
    {
        // Lógica para calcular si esta completado
        if (isset($this->resultado) || !empty($this->resultado)) {
            return true;
        }

        if (isset($this->respuesta_id) || !empty($this->respuesta_id)) {
            return true;
        }

        if (isset($this->motivo) || !empty($this->motivo)) {
            return true;
        }

        return false;
    }
}
