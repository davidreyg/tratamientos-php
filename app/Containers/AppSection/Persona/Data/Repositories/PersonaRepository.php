<?php

namespace App\Containers\AppSection\Persona\Data\Repositories;

use App\Ship\Parents\Repositories\Repository as ParentRepository;

class PersonaRepository extends ParentRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        'numero_documento' => '=',
        'tipo_persona_id' => '=',
        // ...
    ];
}
