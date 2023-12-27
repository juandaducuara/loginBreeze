<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Caso;
use App\Models\User;
use Symfony\Component\HttpKernel\Profiler\Profile;

class CasoController extends Controller
{    
    public function index()
    {
        $casos = Caso::all();
        $users = User::all();
        return view('casos.index', compact('casos','users'));
    }
    public function listacaso()
    {
        $casos = Caso::all();
        $users = User::all();
        return ["casos"=>$casos, "usuarios"=>$users];
    }

    public function create()
    {
        $users = User::all();
        return view('casos.create',compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            // Agrega validaciones para los demás campos aquí
        ]);

        Caso::create($request->all());

        return redirect()->route('casos.index')
                         ->with('success', 'Caso creado exitosamente.');
    }

    public function show($id)
    {
        $caso = Caso::find($id);
        return view('casos.show', compact('caso'));
    }

    public function edit($id)
    {
        $caso = Caso::find($id);
        return view('casos.edit', compact('caso'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'titulo' => 'required',
            // Agrega validaciones para los demás campos aquí
        ]);

        $caso = Caso::find($id);
        $caso->update($request->all());

        return redirect()->route('casos.index')
                         ->with('success', 'Caso actualizado exitosamente.');
    }

    public function destroy($id)
    {
        $caso = Caso::find($id);
        $caso->delete();

        return redirect()->route('casos.index')
                         ->with('success', 'Caso eliminado exitosamente.');
    }
    public function misCasos($user)
    {
        $caso = Caso::find($user);
        return view('casos.show', compact('caso'));
    }
}
