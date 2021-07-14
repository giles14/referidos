<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use App\Models\Transaction;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $leads = Lead::all();
        return view('leads.index' , compact('leads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('leads.create');
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
            'correo' => 'required' ,
            'telefono' => 'required'

        ]);

        Lead::create($request->all());

        return redirect() -> route('leads.index') -> with('success' , 'Lead Agregado correctamente');

    }
    public function storeApi(Request $request)
    {

        // Both code blocks works as expected, nonetheless, I left the seccond one since I can create my own custom messages


        // $validator = \Validator::make($request->all(), ['nombre' => 'required', 'correo' => 'required', 'telefono' => 'required']);

        // if($validator->fails()){

        //     return response()->json($validator->errors(), 200);

        // }else {

        // if(Lead::create($request->all())){

        //     $result[] = ['saved' => true];

        //     }

        // }

        // return response()-> json($result,200);


        try{
            $request -> validate([
                'nombre' => 'required',
                'correo' => 'required' ,
                'telefono' => 'required',
                'programa' => 'required'
    
            ]);
            //return response()->json($request);
            Lead::create($request->all());
            $result[] = ['saved' => true,
            'requestVar'=> $request->all(),
            'fields'=> [$request['nombre'] , $request['correo'], $request['telefono'] , $request['telefone']]
        ];

        }catch (\Illuminate\Validation\ValidationException $e) {

            $result[] = ['saved' => false,
            'reason' => 'No se llenaron todos los campos o no son válidos',
            'requestVar' => $request->all(),
            'fields'=> [$request['nombre'] , $request['correo'], $request['telefono'] , $request['codigo'], $request['programa']]
        ];
            return response()-> json($result);
            //return response()-> json([$request]);

        }


        return response()-> json($result);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lead  $lead
     * @return \Illuminate\Http\Response
     */
    public function show(Lead $lead)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lead  $lead
     * @return \Illuminate\Http\Response
     */
    public function edit(Lead $lead)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lead  $lead
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lead $lead)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lead  $lead
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lead $lead)
    {
        $lead -> delete();

        return redirect() -> route('leads.index') -> with('success' , 'Lead borrado con éxito');
    }
}
