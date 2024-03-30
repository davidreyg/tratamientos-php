<?php

namespace App\Containers\AppSection\Orden\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class ItemOrden extends Pivot
{
    public function getIsCompletedAttribute()
    {
        // Lógica para calcular si esta completado
        if (isset($this->resultado) || !empty($this->resultado)) {
            return true;
        }

        if (isset($this->is_canceled) || !empty($this->is_canceled)) {
            return $this->is_canceled;
        }

        return false;
    }
}
