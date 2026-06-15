<?php

use Illuminate\Support\Facades\Route;
use App\Models\Paciente;
use Illuminate\Http\Request;

Route::get('/pacientes', function () {
    return Paciente::all();
});

Route::post('/pacientes', function (Request $request) {
    return Paciente::create([
        'nombre' => $request->nombre,
        'documento' => $request->documento,
        'telefono' => $request->telefono,
        'especialidad' => $request->especialidad
    ]);
});

Route::put('/pacientes/{id}', function (Request $request, $id) {

    $paciente = Paciente::findOrFail($id);

    $paciente->update([
        'nombre' => $request->nombre,
        'documento' => $request->documento,
        'telefono' => $request->telefono,
        'especialidad' => $request->especialidad
    ]);

    return $paciente;
});

Route::delete('/pacientes/{id}', function ($id) {

    $paciente = Paciente::findOrFail($id);

    $paciente->delete();

    return response()->json([
        'mensaje' => 'Paciente eliminado'
    ]);
});