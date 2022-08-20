<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                switch (Auth::user()->roles[0]->name) {
                    case 'admin':
                        return redirect()->route('dashboard.admin.index');
                        break;
                    
                    case 'aluno':
                        return redirect()->route('dashboard.aluno.index');
                        break;

                    case 'instrutor':
                        return redirect()->route('dashboard.instrutor.index');
                        break;
                }
            }
        }

        return $next($request);
    }
}
