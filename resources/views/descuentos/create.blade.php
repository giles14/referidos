@extends('layout.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Agregar nuevo descuento</h2>
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
                    <li></li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/descuentos" method="POST" >
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-7 col-md-7">
                <div class="form-group">
                    <strong>Nombre:</strong>
                    <input type="text" name="nombre" class="form-control" placeholder="Nombre del descuento" required>
                </div>
            </div>
            <div class="col-xs-12 col-sm-5 col-md-5">
                <div class="form-group">
                    <strong>Tipo:</strong>
                    <select name="tipo" class="form-control" id="tipo" required>
                        <option value="0">Porcentaje</option>
                        <option value="1">Cantidad Fija</option>
                        <option value="1">Solo Inscripcion</option>
                        <option value="2">Porcentaje + Cantidad Fija</option>
                        <option value="4">Porcentaje + Descuento Inscripcion</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>Porcentaje (opcional):</strong>
                    <input type="text" name="porcentaje" class="form-control" placeholder="% de descuento beca (opcional)">
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>Cantidad del descuento (opcional):</strong>
                    <input type="text" name="cantidad" class="form-control" placeholder="$ de descuento beca (opcional)">
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>Descuento en incripcion $ (opcional):</strong>
                    <input type="text" name="descuentoInscripcion" class="form-control" placeholder="$ de descuento Incripcion (opcional)">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <button type="submit" class="btn btn-primary float-right">Enviar</button>
            </div>
        </div>

    </form>
@endsection