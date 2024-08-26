<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class empleadoController extends Controller
{
    public function create(){
        return view('empresarios.create');
    }
}
