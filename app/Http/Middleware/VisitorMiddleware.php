<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Visitor;

class VisitorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */



    public function handle($request, Closure $next)
    {
        // Simpan data pengunjung ke dalam database
        //cek apakah pengunjung sudah adalah admin
        if (!$this->isAdmin($request)) {
            // Jika bukan admin, simpan data pengunjung ke dalam database
            Visitor::create([
                'ip_address' => $request->ip(),
                'visited_at' => now(),
            ]);
        }

        return $next($request);
    }

    private function isAdmin(Request $request)
    {
        return $request->user() && $request->user()->hasRole('admin');
    }
}
