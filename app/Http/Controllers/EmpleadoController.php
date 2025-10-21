<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class EmpleadoController extends Controller
{
    public function index()
    {

        $empleados = DB::table('empleados')
            ->join('empresa', 'empleados.empresa_id', '=', 'empresa.id')
            ->select('empleados.nombre as empleadoNombre', 'empresa.nombre as empresaNombre')
            ->get();

        return view('empleados', compact('empleados'));
    }
}
