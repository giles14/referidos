@extends('layout.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Agregar nueva transacción</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-primary" href="/" title="Go back"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Error!</strong> 
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/transacciones" method="POST" >
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-3 col-md-3">
                <div class="form-group">
                    <strong>Código de transaccion:</strong>
                    {{-- <input type="text" id="folio" name="folio" class="form-control" placeholder="código alfanumérico único" required>
                    <a class="btn btn-primary" onclick="randomNumber()"><i class="fas fa-random"></i></a> --}}

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="folio" id="folio" placeholder="código alfanumérico" aria-describedby="basic-addon2">
                        <div class="input-group-append">

                          <a class="btn btn-primary" onclick="makeId()"><i class="fas fa-random"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-3 col-md-3">
                <div class="form-group">
                    <strong>Código de réferido:</strong>
                    {{-- @foreach ($transactions as $transaction)
                        {{ ($transaction->empleados) }}
                    @endforeach --}}

                    {{-- {{ dd($information)}} --}}
                    <select name="codigo_referido_id" class="form-control" id="tipo" required>
                        @foreach ($information['empleados'] as $employee)
                            <option value="{{ $employee->id }}"> {{ $employee->codigo_referido }} - {{ $employee->nombre }}</option>
                        @endforeach
                    </select>

                    {{-- {{ dd( $information['descuentos'] )}} --}}
                    {{-- @foreach($transactions as $transaction)
                        {{ $transaction->empleado }}
                    @endforeach --}}
                </div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-3">
                <div class="form-group">
                    <strong>Descuento asociado (requerido)):</strong>
                        <select name="descuento_activo_id" class="form-control" id="tipo" required>
                            @foreach ($information['descuentos'] as $employee)
                                <option value="{{ $employee->id }}"> {{ $employee->nombre }}</option>
                            @endforeach
                        </select>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-3">
                <div class="form-group">
                    <strong>Lead Asociado (requerido)):</strong>
                        <select name="lead_id" class="form-control" id="tipo" required>
                            @foreach ($information['leads'] as $lead)
                                <option value="{{ $lead->id }}"> {{ $lead->nombre }}</option>
                            @endforeach
                        </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <button type="submit" class="btn btn-primary float-right">Enviar</button>
            </div>
        </div>
        <script>

            function randomNumber(){
                var randomVar = Math.floor(Math.random() * (9999 - 1000)) + 1000;
                document.getElementById('folio').value = randomVar;
            }


        </script>
        <script>
            function makeId(lenght = 4){

                var result           = '';
                var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';

                var charactersLength = characters.length;

                for ( var i = 0; i < lenght; i++ ) {

                    result += characters.charAt(Math.floor(Math.random() * 
                    charactersLength));
                }
                
                console.log(result);
                document.getElementById('folio').value = result.toUpperCase();

             }
        </script>

    </form>
@endsection