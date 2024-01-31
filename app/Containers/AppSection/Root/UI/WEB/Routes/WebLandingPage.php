<?php

use App\Containers\AppSection\Root\UI\WEB\Controllers\Controller;
use Illuminate\Support\Facades\Route;

$webDomain = env('APP_URL', 'http://apiato.dev.com');
Route::get('/', [Controller::class, 'sayWelcome'])
    ->name('web_root');

Route::group(['domain' => parse_url($webDomain, PHP_URL_HOST)], function () {
    // Handle for vue router only in web domain
    Route::get('/{any}', [Controller::class, 'sayWelcome'])
        ->where('any', '^(?!api(?:\/|$)).*');
});
