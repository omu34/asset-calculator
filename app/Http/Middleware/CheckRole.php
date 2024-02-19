<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role)
    {
        // if ($role == 'admin' && auth()->user()->role_id != 1) {
        //     abort(403);
        // }

        // if ($role == 'business' && auth()->user()->role_id != 2) {
        //     abort(403);
        // }

        // if ($role == 'employee' && auth()->user()->role_id != 3) {
        //     abort(403);
        // }
        // if ($role == 'employer' && auth()->user()->role_id != 4) {
        //     abort(403);
        // }
        // if ($role == 'dealer' && auth()->user()->role_id != 5) {
        //     abort(403);
        // }
        // if ($role == 'agent' && auth()->user()->role_id != 6) {
        //     abort(403);
        // }


        // Check if the user is authenticated
        if (!auth()->check()) {
            abort(403); // If not authenticated, deny access
        }

        switch ($role) {
            case 'admin':
                if (auth()->user()->role_id !== 1) {
                    abort(403);
                }
                break;
            case 'business':
            case 'employer':
            case 'dealer':
            case 'agent':
                if (auth()->user()->role_id !== 3) {
                    abort(403);
                }
                break;
            default:
                abort(403); // For other roles, deny access
                break;
        }

        return $next($request);
    }
}
