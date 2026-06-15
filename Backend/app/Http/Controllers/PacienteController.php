<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    public function index()
    {
        return Paciente::all();
    }

    public function store(Request $request)
    {
        return Paciente::create($request->all());
    }

    public function show(Paciente $paciente)
    {
        return $paciente;
    }

    public function update(Request $request, Paciente $paciente)
    {
        $paciente->update($request->all());
        return $paciente;
    }

    public function destroy(Paciente $paciente)
    {
        $paciente->delete();

        return response()->json([
            'mensaje' => 'Paciente eliminado'
        ]);
    }
}