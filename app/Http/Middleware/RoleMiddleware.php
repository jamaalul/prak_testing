<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Get the first segment of the URL path as the prefix
        $path = $request->path();
        $segments = explode('/', $path);
        $urlPrefix = $segments[0] ?? '';

        // Map URL prefixes to required roles
        $prefixRoleMapping = [
            'jenis-hewan' => ['Administrator'],
            'ras-hewan' => ['Administrator'],
            'kategori' => ['Administrator'],
            'klinis' => ['Administrator'],
            'tindakan-terapi' => ['Administrator'],
            'pet' => ['Administrator', 'Dokter', 'Perawat', 'Resepsionis', 'Pemilik'],
            'pemilik' => ['Administrator', 'Resepsionis', 'Pemilik'],
            'perawat' => ['Administrator', 'Perawat'],
            'dokter' => ['Administrator', 'Dokter'],
            'rekam-medis' => ['Administrator', 'Dokter', 'Perawat', 'Pemilik'],
            'temu-dokter' => ['Administrator', 'Resepsionis', 'Pemilik'],
            'role' => ['Administrator'],
            'user' => ['Administrator'],
        ];

        $requiredRoles = $prefixRoleMapping[$urlPrefix] ?? [];

        if (Auth::check() && Auth::user()->hasAnyRole($requiredRoles)) {
            return $next($request);
        }

        return redirect()->back()->with('error', 'You are not authorized to access this page.');
    }
}
