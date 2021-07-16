@extends('layout.app')
@section('title') empleados @endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Empleados </h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="empleados/create" title="Crear Empleado"> <i class="fas fa-plus-circle"></i>
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
            <th>Código de Referido</th>
            <th>Fecha de Creación</th>
            <th>Operaciones</th>
        </tr>
        @foreach ($empleados as $empleado)
            <tr>
                <td>{{$empleado['id']}}</td>
                <td>{{$empleado['nombre']}}</td>
                <td>{{$empleado['codigo_referido']}}</td>
                <td>{{$empleado['created_at']}}</td>
                <td>
                    <form action="/empleados/{{$empleado->id}}" method="POST">

                        <a href="empleados/{{$empleado->id}}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="empleados/{{$empleado->id}}/edit">
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

    {{-- {!! $empleados->links() !!} --}}

@endsection