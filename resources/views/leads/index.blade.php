@extends('layout.app')
@section('title') Descuentos @endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Leads</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="leads/create" title="Crear Empleado"> <i class="fas fa-plus-circle"></i>
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
            <thead class="thead-dark">
                <th>ID</th>
                <th>Nombre Completo</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Programa</th>
                <th>Administración</th>
            </thead>
        </tr>
        {{-- {{ dd($transactions['empleados'])}} --}}
        @foreach ($leads as $lead)
            <tr>
                <td>{{ $lead->id }}</td>
                <td>{{$lead->nombre}}</td>
                <td>{{$lead->correo}}</td>
                <td>{{$lead->telefono}}</td>
                <td>{{$lead->programa}}</td>
                <td>
                    <form action="/leads/{{$lead->id}}" method="POST">

                        <a href="leads/{{$lead->id}}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        {{-- <a href="transacciones/{{$transaction->id}}/edit">
                            <i class="fas fa-edit  fa-lg"></i>
                        </a> --}}

                        @csrf
                        
                        
                        <button type="submit" action=""  name="{{$lead['id']}}" title="delete" style="border: none; background-color:transparent;">
                        @method('DELETE')
                            <i class="fas fa-trash fa-lg text-danger"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

@endsection