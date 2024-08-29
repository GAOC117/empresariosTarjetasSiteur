<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        if (Auth::check()) {
            return redirect()->route('tarjetas.empresarios'); // Redirige a la ruta deseada si ya está autenticado
        }
 
        return view('auth.login');
    }
}
