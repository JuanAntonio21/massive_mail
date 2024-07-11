<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CorreoEnviado extends Model
{
    protected $table = 'correos_enviados'; // Reemplaza 'nombre_de_tabla' con el nombre real de tu tabla de correos enviados

    // Define las columnas que puedes llenar
    protected $fillable = ['id_user','email', 'fecha_envio'];

    // Opcionalmente, puedes definir relaciones o cualquier otra lógica relacionada con los correos enviados aquí
}