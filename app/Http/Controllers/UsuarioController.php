<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos = Usuario::all(); 
        return view('usuario.lista', ['datos' => $datos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = new Usuario();
        $user->nombre = $request->nombre;
        $user->apellido = $request->apellido;
        $user->email = $request->email;
        $user->contrasena = $request->contrasena;
        $user->save();
        return "Guardado correctamente";
         redirect()->route('/usuariolist');

    }

    /**
     * Display the specified resource.
     */
    public function shownombre(Request $request)
    {
       $datos = Usuario::where('nombre', $request->nombre)->get();
       return view('usuario.lista', ['datos' => $datos]);
    }
    public function showemail(Request $request)
    {
       $datos = Usuario::where('email', $request->email)->get();
       return view('usuario.lista', ['datos' => $datos]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Usuario $usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuario $usuario)
    {
        //
    }
}
