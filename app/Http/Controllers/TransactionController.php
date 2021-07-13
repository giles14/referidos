<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Empleado;
use App\Models\descuento;
use App\Models\Lead;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transactions['transactions'] = Transaction::all();

        $transactions['empleados'] = Empleado::all();

        $transactions['descuentos'] = descuento::all();

        $transactions['leads'] = Lead::all();

        return view('transaction.index' , compact('transactions'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $information['descuentos'] = descuento::all();
        $information['empleados'] = Empleado::all();
        $information['leads'] = Lead::all();

        // return view('transaction.create' , [
        //     'employees' => Empleado::all()]);
        return view('transaction.create', compact('information'));
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
            
            'folio' => 'required',
            'codigo_referido_id' => ['required', function ($attribute, $value, $fail) {
                if (!Empleado::find($value)) {
                    $fail('El referido que intenta asociar, no existe el sistema no puede crear una transacción sin referido asociado.');
                }
            }],
            'descuento_activo_id' => ['required', function ($attribute, $value, $fail) {
                if (!descuento::find($value)) {
                    $fail('El descuento que intenta asociar, no existe, el sistema no puede crear una transacción sin descuento asociado.');
                }
            }],
            'lead_id' => ['required', function ($attribute, $value, $fail) {
                if (!Lead::find($value)) {
                    $fail('El Lead que intenta asociar, no existe el sistema no puede crear una transacción sin Lead asociado.');
                }
            }]

        ]);

        Transaction::create($request -> all());

        return redirect()->route('transacciones.index') -> with('success' , 'Descuento agregado correctamente');



        // if($request['codigo_referido_id']){
            
        //     if( Empleado::find($request['codigo_referido_id']) ){

        //         echo 'Se encontró referido continua';

        //         if(descuento::find($request['descuento_activo_id'])){

        //             if(Lead::find($request['lead_id'])){

        //                 Transaction::create($request -> all());
        //                 return redirect()->route('descuentos.index') -> with('success' , 'Descuento agregado correctamente');


        //             }else {

        //                 echo 'No se encontró el lead id';
        //             }

        //         }else{

        //             echo 'No se encontró el referido id';

        //         }

        //     }else{

        //         echo 'No se encontró el id';

        //         //$validated->errors()->add('codigo_referido_id', 'El código de referido no existe');

        //     }
        
        

        //}
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaction $transaction)
    {

        $request -> validate ([

            'folio' => 'required' ,
            'codigo_referido_id' => 'required' ,
            'descuento_activo_id' => 'required' ,
            'lead_id' => 'required'

        ]);

        $transaction -> update( $request->all() );

        return redirect() -> route('transaccion.index') -> with('success' , 'Transacción Actualizada satisfactoriamente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
