@extends('layout.app')
@section('title') Descuentos @endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Transacciones</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="transacciones/create" title="Crear Empleado"> <i class="fas fa-plus-circle"></i>
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
            <th>Folio</th>
            <th>Referido de</th>
            <th>Campaña de descuento</th>
            <th>Lead Asociado</th>
            <th>Creado</th>
            <th>Acciones</th>
        </tr>
        {{-- {{ dd($transactions['empleados'])}} --}}
        @foreach ($transactions['transactions'] as $transaction)
            <tr>
                <td>{{$transaction['id']}}</td>
                <td>{{$transaction['folio']}}</td>
                <td>
                @foreach ($transactions['empleados'] as $empleado)
                    @if ($empleado->id == $transaction->codigo_referido_id)
                        {{$empleado->nombre}}
                    @endif
                @endforeach
                </td>
                <td>
                    @foreach ($transactions['descuentos'] as $descuento)
                        @if ($descuento->id == $transaction->descuento_activo_id)
                            {{$descuento->nombre}}
                        @endif
                    @endforeach
                    </td>
                {{-- <td>{{$transactions['descuentos'][$transaction['descuento_activo_id']-1]['nombre']}}</td> --}}
                {{-- <td><a href="leads/{{$transactions['leads'][$transaction['lead_id']-1]['id']}}">{{$transactions['leads'][$transaction['lead_id']-1]['id']}}</a></td> --}}
                @foreach ($transactions['leads'] as $lead)
                    @if ($lead->id == $transaction->lead_id)
                        <td><a href="/lead/{{$lead->id}}">{{$lead->nombre}}</a> </td>
                    @endif
                @endforeach
                <td>{{$transaction['created_at']}}</td>
                <td>
                    <form action="/transacciones/{{$transaction->id}}" method="POST">

                        <a href="transacciones/{{$transaction->id}}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        {{-- <a href="transacciones/{{$transaction->id}}/edit">
                            <i class="fas fa-edit  fa-lg"></i>
                        </a> --}}

                        @csrf
                        
                        
                        <button type="submit" action=""  name="{{$transaction['id']}}" title="delete" style="border: none; background-color:transparent;">
                        @method('DELETE')
                            <i class="fas fa-trash fa-lg text-danger"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

@endsection