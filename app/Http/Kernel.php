<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    protected $routeMiddleware = [
        'manager' => \App\Http\Middleware\IsManagerMiddleware::class,
        'admin' => \App\Http\Middleware\IsAdminMiddleware::class,
    ];
}