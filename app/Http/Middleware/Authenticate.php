<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

use RealRashid\SweetAlert\Facades\Alert;
class Authenticate extends Middleware
{

    public function handle($request, Closure $next, ...$guards)
    {
        $this->authenticate($request, $guards);
        // dd(auth()->user()->hasRole('admin'));

        if ($request->is('admin*') && !(auth()->user()->hasRole('admin'))) {
            alert()->error('Inicia sesión para continuar');
            $this->unauthenticated($request, $guards);
        }

        return $next($request);
    }
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            //return route('publico.login');
            return route('explicacion-proyecto');
        }
    }
}
