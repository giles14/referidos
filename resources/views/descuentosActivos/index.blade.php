@extends('layout.app')
@section('title') Descuentos @endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Asignacion de descuentos</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="descuentosActivos/create" title="Crear Empleado"> <i class="fas fa-plus-circle"></i></a>
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
            <th>Código de Referido</th>
            <th>Descuento asociado</th>
            <th>Fecha</th>
            <th>Acciones</th>
        </tr>
        @foreach ($information['descuentoActivo'] as $info)
            <tr>
                <td>{{$info->id}}</td>
                @foreach ($information['empleado'] as $empleado)
                    @if ($empleado->id == $info->empleado_id)
                        <td>{{$empleado->nombre}}</td>
                    @endif
                @endforeach
                @foreach ( $information['descuento'] as $descuento)
                    @if ($descuento->id == $info->descuento_id)
                        <td>{{$descuento->nombre}}</td>
                    @endif
                @endforeach
                <td>{{$info['created_at']}}</td>
                <td>
                    <form action="/descuentosActivos/{{$info->id}}" method="POST">

                        <a href="descuentosActivos/{{$info->id}}/edit">
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