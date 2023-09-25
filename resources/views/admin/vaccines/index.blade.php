@extends('adminlte::page')

@section('title', 'IdenMac')

@section('content_header')
    <h1>Lista de Vacunas</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <a class="text-white btn btn-primary" href="{{route('admin.vaccines.create')}}">Nuevo</a>
        </div>
        @if (session('info'))
        <div class="alert alert-success">
            <strong>
                {{session('info')}}
            </strong>
        </div>
    @endif
        <div class="card-body">
            <p>Bienvenido a Administracion.</p>
            <table class="table table-striped">
                <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Forma</th>
                    <th>Marca</th>
                    <th>Dosis</th>
                    <th>Alerta</th>
                    <th colspan="2"></th>

                </thead>

                <tbody>

                 @foreach ($vaccine as $vaccine)
                     <tr>
                        <td>{{$vaccine->id}}</td>
                        <td>{{$vaccine->name}}</td>
                        <td>{{$vaccine->form}}</td>
                        <td>{{$vaccine->brand}}</td>
                        <td>{{$vaccine->dosis}}</td>
                        <td>{{$vaccine->caution}}</td>
                        <td width="10px">
                            <a  class="text-white rounded-lg btn btn-primary" href="{{route('admin.vaccines.edit', $vaccine)}}">Editar</a></td>
                        <td width="10px">
                            <form action="{{route('admin.vaccines.destroy', $vaccine)}}" method="POST">
                                @csrf
                                @method('delete')

                                <button type="submit" onclick="return confirm('¿Quiere Eliminar Medicamento?')" class="text-white rounded-lg btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                     </tr>
                 @endforeach

                </tbody>

            </table>
        </div>
    </div>
@stop


{{-- @section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop --}}