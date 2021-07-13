<?php

namespace App\Http\Controllers;

use App\Models\DescuentoActivo;
use App\Models\Empleado;
use App\Models\descuento;
use Illuminate\Http\Request;

class DescuentoActivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $information['empleado'] = Empleado::all();
        $information['descuento'] = descuento::all();
        $information['descuentoActivo'] = DescuentoActivo::all();

        return view('descuentosActivos.index' , compact('information'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $information['empleado'] = Empleado::all();
        $information['descuento'] = descuento::all() ;
        return view('descuentosActivos.create' , compact('information'));
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
        
            'empleado_id' => ['required', function ($attribute, $value, $fail) {
                if (!Empleado::find($value)) {
                    $fail('El código o empleado que intenta asociar, no existe, el sistema no puede crear un descuento activo sin referido asociado.');
                }
            }],
            'descuento_id' => ['required', function ($attribute, $value, $fail) {
                if (!descuento::find($value)) {
                    $fail('El descuento que intenta asociar, no existe, el sistema no puede crear un descuento asociado sin campaña asociada.');
                }
            }]

        ]);

        DescuentoActivo::create($request -> all());

        return redirect()->route('descuentosActivos.index') -> with('success' , 'Descuento asociado correctamente');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DescuentoActivo  $descuentoActivo
     * @return \Illuminate\Http\Response
     */
    public function show(DescuentoActivo $descuentoActivo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DescuentoActivo  $descuentoActivo
     * @return \Illuminate\Http\Response
     */
    public function edit(DescuentoActivo $descuentoActivo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DescuentoActivo  $descuentoActivo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DescuentoActivo $descuentoActivo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DescuentoActivo  $descuentoActivo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DescuentoActivo::find($id)->delete();

        return redirect()->route('descuentosActivos.index') -> with('success' , 'Descuento activo borrado Satisfactoriamente');
    }
}
