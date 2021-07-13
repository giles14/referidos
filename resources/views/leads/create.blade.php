@extends('layout.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Agregar nuevo Lead</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-primary" href="" title="Go back"> <i class="fas fa-backward "></i> </a>
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
    <form action="/leads" method="POST" >
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Nombre:</strong>
                    <input type="text" name="nombre" class="form-control" placeholder="Nombre completo">
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Teléfono: </strong>
                    <input type="tel" name="telefono" class="form-control" placeholder="Teléfono con lada">
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Correo:</strong>
                    <input type="text" name="correo" class="form-control" placeholder="Correo electrónico">
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>Programa de Interés:</strong>
                    <input type="text" name="programa" class="form-control" placeholder="Código alfanumérico">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 float-right">
                <button type="submit" class="btn btn-primary float-right">Enviar</button>
            </div>
        </div>

    </form>
@endsection