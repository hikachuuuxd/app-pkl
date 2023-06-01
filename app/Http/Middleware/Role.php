<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, string $role)
    {

        $roles = [
            'admin' => [1],
            'dudi' => [2],
            'siswa' => [3],
            'guru' => [4],
            'ortu' => [5],
        ];

        $roleId = $roles[$role] ?? [];

        if(!in_array(auth()->user()->role_id, $roleId) ){
            abort(404);
        }
        return $next($request);
    }
}
