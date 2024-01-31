<?php

namespace App\Containers\AppSection\Root\UI\WEB\Controllers;

use App\Ship\Parents\Controllers\WebController;

class Controller extends WebController
{
    public function sayWelcome()
    {
        return view('appSection@root::welcome-page');
    }
}
