<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\EnviarCorreo;
use App\Http\Controllers\CorreoEnviadoController;
use App\Http\Controllers\CrearCorreos;
use App\Models\User;
use Carbon\Carbon;
use App\Models\CorreoEnviado;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::post('enviar-correo',function(){
    $usuarios = User::all();

    // Verificar si hay correos electrónicos para enviar
    if (count($usuarios) > 0) {
        $count = 0;
        // Enviar correo a cada dirección de correo electrónico
        foreach ($usuarios as $usuario) {
            $correoEnviadoExistente = CorreoEnviado::where('id_user', $usuario->id)->exists();

            
            // Si no se ha enviado un correo a este usuario, enviar el correo y guardar el registro
            if (!$correoEnviadoExistente) {
                Mail::to($usuario->email)->send(new EnviarCorreo($usuario->name));

                // Crear un registro en la tabla correos_enviados
                $correoEnviado = new CorreoEnviado();
                $correoEnviado->email = $usuario->email;
                $correoEnviado->id_user = $usuario->id;
                $correoEnviado->fecha_envio = Carbon::now('Europe/Madrid'); 
                $correoEnviado->save();
                $count ++;
             }
        }
        if ($count == 0){
            return "Ningun correo enviado";
        }else {
            return "Correo enviado exitosamente a todos los destinatarios. Enviados: $count";
        }
    } else {
        return "No hay correos electrónicos en la base de datos para enviar.";
    }
})->name('enviar-correo');

Route::get('correos-enviados', [CorreoEnviadoController::class, 'index'])->name('correos-enviados');
Route::get('crear-correo', [CrearCorreos::class, 'index'])->name('crear-correo');
Route::post('crear-nuevo-correo',function(){
    return "estamos aqui";
})->name('crear-nuevo-correo');