<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class People{
    public $email;
    public $role;

    public function __construct($email, $role)
    {
        $this->email = $email;
        $this->role = $role;
    }

    public function getUserRole(){
        return $this->role;
    }
}


class UserRoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $people = new People('jancok.com', 'admin');
        if ($people->role != 'admin') {
            abort('403', 'Anda tidak memiliki Akses ke halaman ini.');
        }
        return $next($request);
    }
}
