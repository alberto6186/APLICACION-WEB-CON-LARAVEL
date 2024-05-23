<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teacher = Docente::all();
        return view('docentes.index', compact('teacher'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('docentes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $teacher = new Docente();
        $teacher->nombre = $request->input('nombre');
        $teacher->direccion = $request->input('direccion');
        $teacher->telefono = $request->input('telefono');
        $teacher->formacion = $request->input('formacion');


        if ($request->hasFile('imagen')){ //si desde ese campo viene un archivo hacer:
            $teacher->imagen = $request->file('imagen')->store('public/imagenes');
        }

        $teacher->save();
        return 'Se creo el instructor con exito';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $teacher = Docente::find($id);
        return view('docentes.show', compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $teacher = Docente::find($id);
        return view('docentes.edit',compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $teacher = Docente::find($id);
        $teacher->fill($request->except('imagen'));
        if ($request->hasFile('imagen')){ //si desde ese campo viene un archivo hacer:
            $teacher->imagen = $request->file('imagen')->store('public/imagenes');
            $teacher->save();
            return 'Docente actualizado';
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
