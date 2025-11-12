<?php


namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function edit()
    {
        $usuario = Auth::user();
        return view('perfil', compact('usuario'));
    }




    public function update(Request $request, $id)
    {
        $usuario = User::findOrFail($id);
        $usuario->first_name = $request->first_name;
        $usuario->last_name = $request->last_name;
        $usuario->email = $request->email;
        $usuario->phone = $request->phone;
        $usuario->save();
        \Log::info('Usuario actualizado: ' . $usuario->id);
        return back()->with('success', 'Perfil actualizado correctamente');
    }

}
