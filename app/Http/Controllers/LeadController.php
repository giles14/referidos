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
            'fields'=> [$request['nombre'] , $request['correo'], $request['telefono'] , $request['programa'] ,  $request['codigo']]
        ];
        
        $result[]['crm'] = $this->pushCrm($result);
        

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
    /**
     * It sends the received data (from storeApi) to push it to an External CRM
     * 
     * receive: leadInformation data
     * @return \Illuminate\Http\Response
     */
    public function pushCrm( $leadInfo ){

        // Sobre escribe la carrera LSP temporalmente.
        //TODO: Cambiar LSP a la lista de carreras permitidas.
        $leadInfo[0]['fields'][3] = 'LSP';

        $url = 'https://api.redisoft.dev/Leads/web';
        $data = array('nombre' => $leadInfo[0]['fields'][0], 'correo' => $leadInfo[0]['fields'][1] , 'telefono' => $leadInfo[0]['fields'][2], 'programa' => $leadInfo[0]['fields'][3] , 'referencia' => 'https://www.iexe.edu.mx/administracion-de-empresas#FormularioPrograma' , 'adicional' => 'landing Page');
        //$data = 'nombre=Nombre de prueba&correo=miCorreodePrueba7@gmail.com&telefono=+522226558877&programa=LAE&referencia=https://www.iexe.edu.mx/administracion-de-empresas#FormularioPrograma&adicional=landing merca';

         //$data2 = http_build_query($data);
         //$myData = urldecode($data2);
        // echo $myData;

        $options = array(
            'http' => array(
                'header'  => "Content-type: application/x-www-form-urlencoded",
                'method'  => 'POST',
                'content' => http_build_query($data)

            )
        );
        $context  = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        
        if($result){
            return $result;
        }

        if ($result === FALSE) { 
            echo 'CRM regreso un valor no reconocido';
         }

    }
}
