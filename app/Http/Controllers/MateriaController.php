<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Materia;
use App\Models\Proveedor;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    
    public function index()
    {
        $materias=Materia::get();
        return view('materias.index', compact('materias'));
    }

    public function create()
    {
        $categorias = Categoria::get();
        $proveedors = Proveedor::get();
        
        return view('materias.create', compact('categorias', 'proveedors'));
    }

    public function store(Request $request)
    {
        $materia = Materia::create($request->all());
        $materia->update(['codigo'=>$materia->id]);
        return redirect()->route('materias.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function show(Materia $materia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function edit(Materia $materia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Materia $materia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Materia $materia)
    {
        //
    }
}
