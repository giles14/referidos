@extends('layout.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Agregar nuevo empleado</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="/empleados" title="Go back"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Error!</strong> 
            <ul>
                @foreach ($errors->all() as $error)
                    <li></li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/empleados" method="POST" >
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nombre:</strong>
                    <input type="text" name="nombre" class="form-control" placeholder="Nombre completo">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Código de referido (opcional):</strong>
                    <input type="text" name="codigo_referido" id="codigo_referido" class="form-control" placeholder="Código alfanumérico">
                </div>
                <div class="input-group-append">

                    <a class="btn btn-primary" onclick="makeId()"><i class="fas fa-random"></i></a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>

    </form>
    <script>
        function makeId(lenght = 5){

            var result           = '';
            var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';

            var charactersLength = characters.length;

            for ( var i = 0; i < lenght; i++ ) {

                result += characters.charAt(Math.floor(Math.random() * 
                charactersLength));
            }
            
            console.log(result);
            document.getElementById('codigo_referido').value = result.toUpperCase();

         }
    </script>
@endsection