@extends('layout.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editar Descuento</h2>
            </div>
            <div class="pull-right">
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

    <form action="/descuentos/{{ $descuento->id }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ID:</strong>
                    <input type="text" name="id" value="{{$descuento->id}}" class="form-control" disabled>
                </div>
            </div>
            <div class="col-xs-12 col-sm-7 col-md-7">
                <div class="form-group">
                    <strong>Nombre:</strong>
                    <input type="text" name="nombre" value="{{$descuento->nombre}}" class="form-control" placeholder="Nombre del descuento" required>
                </div>
            </div>
            <div class="col-xs-12 col-sm-5 col-md-5">
                <div class="form-group">
                    <strong>Tipo:</strong>
                    <select name="tipo" class="form-control" id="tipo" required>
                        <option value="0" {{ $descuento->tipo === 0 ? "selected" : ""}}>Porcentaje</option>
                        <option value="1" {{ $descuento->tipo === 1 ? "selected" : ""}}>Cantidad Fija</option>
                        <option value="2" {{ $descuento->tipo === 2 ? "selected" : ""}}>Solo Inscripcion</option>
                        <option value="3" {{ $descuento->tipo === 3 ? "selected" : ""}}>Porcentaje + Cantidad Fija</option>
                        <option value="4"{{ $descuento->tipo === 4 ? "selected" : ""}}>Porcentaje + Descuento Inscripcion</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>Porcentaje (opcional):</strong>
                    <input type="text" name="porcentaje" value="{{ $descuento -> porcentaje }}" class="form-control" placeholder="% de descuento beca (opcional)" {{ $descuento->porcentaje ? "" : "disabled"}}>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>Cantidad del descuento (opcional):</strong>
                    <input type="text" name="cantidad" value="{{ $descuento -> cantidad }}" class="form-control" placeholder="$ de descuento beca (opcional)" {{ $descuento->cantidad ? "" : "disabled"}}>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="form-group">
                    <strong>Descuento en incripcion $ (opcional):</strong>
                    <input type="text" name="descuentoInscripcion" value="{{ $descuento -> descuentoInscripcion }}" class="form-control" placeholder="$ de descuento Incripcion (opcional)" {{ $descuento->descuentoInscripcion ? "" : "disabled"}}>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <button type="submit" class="btn btn-primary float-right">Editar</button>
            </div>
        </div>

    </form>
@endsection