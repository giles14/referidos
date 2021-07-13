<?php

namespace App\Http\Controllers;

use App\Models\descuento;
use Illuminate\Http\Request;

class DescuentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $descuentos = Descuento::all();
        return view('descuentos.index' , compact( 'descuentos' ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('descuentos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate([
            'nombre' => 'required',
            'tipo' => 'required',
            'porcentaje' => 'nullable',
            'cantidad' => 'nullable',
            'descuentoInscripcion' => 'nullable'
        ]);
        Descuento::create($request -> all());
        return redirect()->route('descuentos.index') -> with('success' , 'Descuento agregado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\descuento  $descuento
     * @return \Illuminate\Http\Response
     */
    public function show(descuento $descuento)
    {
        return view('descuentos.show' ,  compact('descuento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\descuento  $descuento
     * @return \Illuminate\Http\Response
     */
    public function edit(descuento $descuento)
    {
        return view('descuentos.edit' , compact('descuento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\descuento  $descuento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, descuento $descuento)
    {
        $request -> validate ([

            'nombre' => 'required'

        ]);

        $descuento -> update( $request->all() );

        return redirect() -> route('descuentos.index') -> with('success' , 'Descuento Actualizado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\descuento  $descuento
     * @return \Illuminate\Http\Response
     */
    public function destroy(descuento $descuento)
    {
        $descuento -> delete();

        return redirect() -> route('descuentos.index') -> with('success' , 'Descuento borrado con éxito');
    }
}
