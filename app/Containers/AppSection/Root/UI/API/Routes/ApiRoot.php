<?php

use App\Containers\AppSection\Root\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;

// http://api.apiato.test
Route::get('/', [Controller::class, 'apiRoot'])
    ->name('api_welcome_root_page');
