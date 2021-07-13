@extends('layout.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Agregar nuevo descuento activo</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-primary" href="/descuentos" title="Go back"> <i class="fas fa-backward "></i> </a>
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
    <form action="/descuentosActivos" method="POST" >
        @csrf

        <div class="row mt-4">
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>Código referido:</strong>
                    <select name="empleado_id" class="form-control" id="tipo" required>
                        @foreach ($information['empleado'] as $info)
                            <option value="{{$info->id}}">{{$info->codigo_referido}} - {{$info->nombre}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>Campaña de descuento</strong>
                    <select name="descuento_id" class="form-control" id="tipo" required>
                        @foreach ($information['descuento'] as $info)
                            <option value="{{$info->id}}">{{$info->nombre}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-4 alert alert-info">
                <p><i class="fas fa-question-circle"></i> Es el descuento que quedará asociado al referido</p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <button type="submit" class="btn btn-primary float-right">Enviar</button>
            </div>
        </div>

    </form>
@endsection