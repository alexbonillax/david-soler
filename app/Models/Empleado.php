<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = 'empleados'; // Nombre de la tabla
    protected $fillable = ['nombre', 'empresa_id']; // Campos permitidos
}
