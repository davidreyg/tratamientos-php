<?php

namespace App\Containers\AppSection\Root\Actions;

use App\Ship\Parents\Actions\Action;

class FindMessageForApiRootVisitorAction extends Action
{
    public function run(): array
    {
        return ['Welcome to Apiato'];
    }
}
