@extends('adminlte::page')

@section('title', 'Iden Mac')

@section('content_header')
    <h1>Mascota</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <a class="btn btn-primary" href="{{route('admin.pets.create')}}">Nuevo</a>
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
                    <th>Tipo de Mascota</th>
                    <th>Edad</th>
                    <th>Genero</th>
                    <th>Caracteristicas</th>
                    <th>Ciudad</th>
                    <th>Raza</th>
                    <th>Usuario</th>
                    <th colspan="6"></th>

                </thead>

                <tbody>

                 @foreach ($pets as $pet)
                     <tr>
                        <td>{{$pet->id}}</td>
                        <td>{{$pet->name}}</td>
                        <td>{{$pet->pet_type->name}}</td>
                        <td>{{$pet->age}}</td>
                        <td>{{$pet->gender}}</td>
                        <td>{{$pet->features}}</td>
                        <td>{{$pet->city}}</td>
                        <td>{{$pet->breed}}</td>
                        <td>{{$pet->user->name}}</td>
                        <td width="10px">
                            <a  class="text-white rounded-lg btn bg-blue-600" href="{{route('admin.pets.edit', $pet)}}">Editar</a></td>

                            <td width="10px">
                            <form action="{{route('admin.pets.destroy', $pet)}}" method="POST">
                                @csrf
                                @method('delete')

                                <button type="submit" onclick="return confirm('¿Quiere Eliminar mascota?')" class="text-white rounded-lg btn bg-red-600">Eliminar</button>
                            </form>
                        </td>
                     </tr>
                 @endforeach

                </tbody>

            </table>
        </div>
    </div>
@stop
