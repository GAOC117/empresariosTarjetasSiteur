<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class costosController extends Controller
{
    public function index(){

        return view('costos.index');
    }
    //
}
