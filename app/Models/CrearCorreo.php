<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CorreoEnviado;

class CrearCorreo extends Model
{
    protected $table = 'correos'; // Reemplaza 'nombre_de_tabla' con el nombre real de tu tabla de correos enviados

    // Define las columnas que puedes llenar
    protected $fillable = ['title','message'];

}
