<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function edit()
    {
        $usuario = Auth::user();
        return view('perfil', compact('usuario'));
    }



public function update(Request $request)
{
    $usuario = Auth::user();
    $usuario->update($request->only(['name', 'email']));
    return redirect()->route('perfil')->with('success', 'Perfil actualizado correctamente');
}
}
