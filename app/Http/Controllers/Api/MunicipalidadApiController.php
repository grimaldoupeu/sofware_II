<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Municipalidad;
use Illuminate\Http\Request;

class MunicipalidadApiController extends Controller
{
    public function index()
    {
        return Municipalidad::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'titulo' => 'nullable|string|max:255',
        ]);

        $municipalidad = Municipalidad::create($request->all());

        return response()->json(Municipalidad::all(), 200);
    }

    public function show(Municipalidad $municipalidad)
    {
        return $municipalidad;
    }

    public function update(Request $request, Municipalidad $municipalidad)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'titulo' => 'nullable|string|max:255',
        ]);

        $municipalidad->update($request->all());

        return response()->json($municipalidad, 200);
    }

    public function destroy(Municipalidad $municipalidad)
    {
        $municipalidad->delete();

        return response()->json(null, 204);
    }
}
