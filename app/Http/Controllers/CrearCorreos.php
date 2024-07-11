<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CrearCorreo;

class CrearCorreos extends Controller
{
    //
    public function index(Request $request)
    {
        return view('create_correos.index');
    }
}
