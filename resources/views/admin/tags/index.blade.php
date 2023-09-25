@extends('adminlte::page')

@section('title', 'IdenMac')

@section('content_header')
    <h1>Lista de Etiquetas</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <a class="text-white btn btn-primary" href="{{route('admin.tags.create')}}">Nuevo</a>
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
                    <th>Descripcion</th>
                    <th colspan="2"></th>

                </thead>

                <tbody>

                 @foreach ($tag as $tag)
                     <tr>
                        <td>{{$tag->id}}</td>
                        <td>{{$tag->name}}</td>
                        <td>{{$tag->description}}</td>
                        <td width="10px">
                            <a  class="text-white rounded-lg btn btn-primary" href="{{route('admin.tags.edit', $tag)}}">Editar</a></td>
                        <td width="10px">
                            <form action="{{route('admin.tags.destroy', $tag)}}" method="POST">
                                @csrf
                                @method('delete')

                                <button type="submit" onclick="return confirm('¿Quiere Eliminar el Producto?')" class="text-white rounded-lg btn btn-danger">Eliminar</button>
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