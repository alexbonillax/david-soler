<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = 'empleados';
    protected $fillable = ['nombre', 'empresa_id'];
}

public function empresa()
{
    return $this->belongsTo(Empresa::class, 'empresa_id');
}
