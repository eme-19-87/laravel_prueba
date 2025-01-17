@extends('adminlte::page')

@section('title', 'IdenMac')

@section('content_header')
    <h1>Lista de Especies</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <a class="text-white btn btn-primary" href="{{route('admin.pettypes.create')}}">Nuevo</a>
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
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th colspan="2"></th>

                </thead>

                <tbody>

                 @foreach ($pet_type as $pet_type)
                     <tr>
                        <td>{{$pet_type->id}}</td>
                        <td>{{ucfirst(__($pet_type->name))}}</td>
                        <td>{{$pet_type->description}}</td>
                        <td width="10px">
                            <a  class="text-white rounded-lg btn btn-primary" href="{{route('admin.pettypes.edit', $pet_type)}}">Editar</a></td>
                        <td width="10px">
                            <button type="button" class="text-white btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delete-{{$pet_type->id}}">
                                Eliminar
                            </button>
                        </td>
                     </tr>
                     @include('admin.pettypes.delete')
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
