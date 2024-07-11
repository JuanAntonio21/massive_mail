<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CorreoEnviado;
use Carbon\Carbon;

class CorreoEnviadoController extends Controller
{
    public function index(Request $request)
    {
        $fecha = $request->fecha ? Carbon::parse($request->fecha) : Carbon::now();
        $correosEnviados = CorreoEnviado::whereDate('fecha_envio', $fecha->toDateString())->get();
        return view('correos_enviados.index', compact('correosEnviados', 'fecha'));
    }
}

