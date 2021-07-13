<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Models\descuento;
use App\Models\DescuentoActivo;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados = Empleado::latest()->paginate(5);

        return view('empleados.index' , compact('empleados'))->with('i', (request()->input('page' , 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empleados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'codigo_referido' => 'nullable'
        ]);

        Empleado::create($request->all());
        return redirect()->route('empleados.index') -> with('success' , 'Empleado agregado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
        return view('empleados.show' , compact('empleado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit(Empleado $empleado)
    {
        return view('empleados.edit' , compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empleado $empleado)
    {
        $request->validate([
            'nombre' => 'required',
            'codigo_referido' => 'required'
        ]);

        $empleado->update($request->all());

        return redirect()->route('empleados.index') -> with('success' , 'Empleado Actualizado satisfactoriamente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empleado $empleado)
    {

        $empleado->delete();

        return redirect()->route('empleados.index') -> with('success' , 'Empleado borrado Satisfactoriamente');

    }

    public function descuentoActivo($codigo){

        $empleado = Empleado::where( 'codigo_referido' , '=' , $codigo )->first();
        

        //$descuento = descuento::find();

        if($empleado){

            $descuentoActivo = DescuentoActivo::where('empleado_id', '=', $empleado->id )->first();
            $descuento = descuento::where('id' , '=', $descuentoActivo->descuento_id)->first();


            $datos = [ 'find' => 'true',
                        'descuento' => 3000,
                        'varios' => ['1' , '2'],
                        'empleado' => $empleado->nombre,
                        'descuento_tipo' => $descuento->tipo,
                        'descuento_nombre' => $descuento->nombre,
                        'cantidad' => $descuento->cantidad
        ];
            
            return response() -> json( $datos , 200 );

        }else{
            
            echo "No se encontró";

        };
        

        

    }

}
