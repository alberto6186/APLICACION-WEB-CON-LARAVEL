<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Vehiculo;

class SoatController extends Controller
{
    public function index()
    {
        return view('soat.index');
    }

    public function create(Request $request)
    {
        $placa = $request->query('placa');
        $numeroIdentificacion = $request->query('numero_identificacion');

        $vehiculo = Vehiculo::where('placa', $placa)->first();
        $cliente = Cliente::where('numero_identificacion', $numeroIdentificacion)->first();

        if ($vehiculo && $cliente) {
            return view('soat.create', compact('vehiculo', 'cliente'));
        } else {
            return redirect()->back()->withErrors(['msg' => 'No se encontraron registros para los datos proporcionados.']);
        }
    }
    public function show(Request $request)
{
    $placa = $request->input('placa');
    $numero_identificacion = $request->input('numero_identificacion');

    // Aquí debes buscar el vehículo y cliente en la base de datos según la placa y número de identificación
    // Supongamos que encuentras el vehículo y el cliente:
    $vehiculo = Vehiculo::where('placa', $placa)->first();
    $cliente = Cliente::where('numero_identificacion', $numero_identificacion)->first();

    if ($vehiculo && $cliente) {
        return view('soat.create', [
            'vehiculo' => $vehiculo,
            'cliente' => $cliente
        ]);
    } else {
        return redirect()->back()->withErrors(['msg' => 'Vehículo o cliente no encontrado.']);
    }
}

    public function consultar(Request $request)
    {
        $placa = $request->input('placa');
        $identificacion = $request->input('numero_identificacion');

        $vehiculo = Vehiculo::where('placa', $placa)->first();
        $cliente = Cliente::where('numero_identificacion', $identificacion)->first();

        if ($vehiculo && $cliente) {
            return redirect()->route('soat.create', ['placa' => $placa, 'numero_identificacion' => $identificacion]);
        } else {
            return redirect()->back()->withErrors(['msg' => 'No se encontraron registros para los datos proporcionados.']);
        }
    }
}
