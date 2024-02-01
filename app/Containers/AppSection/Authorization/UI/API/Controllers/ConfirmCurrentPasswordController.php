<?php

namespace App\Containers\AppSection\Authorization\UI\API\Controllers;

use App\Containers\AppSection\Authorization\UI\API\Requests\ConfirmCurrentPasswordRequest;
use App\Ship\Parents\Controllers\ApiController;

class ConfirmCurrentPasswordController extends ApiController
{


    public function __invoke(ConfirmCurrentPasswordRequest $request)
    {
        return $this->noContent();
    }
}
