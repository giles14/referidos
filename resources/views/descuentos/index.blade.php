@extends('layout.app')
@section('title') Descuentos @endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Descuentos</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="descuentos/create" title="Crear Empleado"> <i class="fas fa-plus-circle"></i>
                    </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ session()->get('success')}}</p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Porcentaje %</th>
            <th>Cantidad $</th>
            <th>Desc. Inscripcion</th>
            <th>Creado</th>
            <th>Acciones</th>
        </tr>
        @foreach ($descuentos as $descuento)
            <tr>
                <td>{{$descuento['id']}}</td>
                <td>{{$descuento['nombre']}}</td>
                <td>{{$descuento['tipo']}}</td>
                <td>{{$descuento['porcentaje']}}</td>
                <td>{{$descuento['cantidad']}}</td>
                <td>{{$descuento['descuentoInscripcion']}}</td>
                <td>{{$descuento['created_at']}}</td>
                <td>
                    <form action="/descuentos/{{$descuento->id}}" method="POST">

                        <a href="descuentos/{{$descuento->id}}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="descuentos/{{$descuento->id}}/edit">
                            <i class="fas fa-edit  fa-lg"></i>
                        </a>

                        @csrf
                        
                        
                        <button type="submit" action=""  name="3" title="delete" style="border: none; background-color:transparent;">
                        @method('DELETE')
                            <i class="fas fa-trash fa-lg text-danger"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

@endsection