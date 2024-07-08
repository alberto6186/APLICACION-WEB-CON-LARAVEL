<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;
use Illuminate\Support\Facades\Hash;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $course = Curso::all();
        return view('registros.index', compact('course'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('registros.create');
    }
    public function login()
    {
        return view('registros.login');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $course = new Curso();
        $course->nombre = $request->input('nombre');
        $course->apellidos = $request->input('apellidos');
        $course->email = $request->input('email');
        $course->password = Hash::make($request['password']);

        $course->save();
        return redirect()->route('registros.index')->with('status', 'create');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $course = Curso::find($id);
        return view('registros.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $course = Curso::find($id);
        return view('registros.edit',compact('course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $course = Curso::find($id);
        $course->fill($request->except('imagen'));
        if ($request->hasFile('imagen')){ //si desde ese campo viene un archivo hacer:
            $course->imagen = $request->file('imagen')->store('public/imagenes');
            $course->save();
            return 'Curso actualizado';
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

    }
}


