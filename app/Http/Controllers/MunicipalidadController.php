<?php

namespace App\Http\Controllers;

use App\Models\Municipalidad;
use Illuminate\Http\Request;

class MunicipalidadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $municipalidades = Municipalidad::all();
    return view('municipalidades.index', compact('municipalidades'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    return view('municipalidades.create');
}


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
        ]);

        Municipalidad::create([
            'nombre' => $request->nombre,
        ]);

        return redirect()->route('municipalidades.index')
            ->with('success', 'Municipalidad creada exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Municipalidad $municipalidad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Municipalidad $municipalidad)
    {
        return view('municipalidades.edit', compact('municipalidad'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $request->validate([
        'nombre' => 'required|string|max:255',
        'titulo' => 'nullable|string|max:255',
    ]);

    $municipalidad = Municipalidad::findOrFail($id);
    $municipalidad->update([
        'nombre' => $request->nombre,
        'titulo' => $request->titulo,
    ]);

    return redirect()->route('municipalidades.index')->with('success', 'Municipalidad actualizada con éxito.');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    $municipalidad = Municipalidad::findOrFail($id);
    $municipalidad->delete();

    return redirect()->route('municipalidades.index')->with('success', 'Municipalidad eliminada con éxito.');
}
}
