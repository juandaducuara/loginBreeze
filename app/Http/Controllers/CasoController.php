<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Caso;

class CasoController extends Controller
{
    public function index()
    {
        $casos = Caso::all();
        return view('casos.index', compact('casos'));
    }

    public function create()
    {
        return view('casos.create');
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
}
