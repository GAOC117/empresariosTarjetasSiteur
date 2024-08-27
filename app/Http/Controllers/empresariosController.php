<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class empresariosController extends Controller
{
    public function index(){
        return view('empresarios.index');
    }

    public function create(){
        return view('recargas.create');
    }
}
