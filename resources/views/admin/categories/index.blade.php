@extends('adminlte::page')

@section('title', 'IdenMac')

@section('content_header')
    <h1>Lista de Categorias</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <a class="text-white btn btn-primary" href="{{route('admin.categories.create')}}">Nuevo</a>
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

                 @foreach ($categories as $category)
                     <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->name}}</td>
                        <td>{{$category->description}}</td>
                        <td width="10px">
                            <a  class="text-white rounded-lg btn btn-primary" href="{{route('admin.categories.edit', $category)}}">Editar</a></td>
                        <td width="10px">
                            
                            <form action="{{route('admin.categories.destroy', $category)}}" method="POST">
                                @csrf
                                @method('delete')

                                <button type="submit" onclick="return confirm('¿Quiere Eliminar esta Categoria?')" class="text-white rounded-lg btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                     </tr>
                     @include('admin.categories.delete')
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
