<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        'https://prettywell.co.id/payment-handler',
        'http://127.0.0.1:8000/payment-handler',
        'http://127.0.0.1:8000/login',
    ];
}
