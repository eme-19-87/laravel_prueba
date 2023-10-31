@extends('adminlte::page')

@section('title', 'IdenMac')

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
                        <td>{{ucfirst(__($pet->pet_type->name))}}</td>
                        <td>{{$pet->age}}</td>
                        <td>{{ucfirst(__($pet->gender))}}</td>
                        <td>{{$pet->features}}</td>
                        <td>{{$pet->city}}</td>
                        <td>{{$pet->breed}}</td>
                        <td><a href="{{route('admin.users.edit', ['user'=>$pet->user->id])}}">{{$pet->user->name}}</a></td>
                        <td width="10px">
                            <a  class="text-white rounded-lg btn btn-primary" href="{{route('admin.pets.edit', $pet)}}">Editar</a></td>

                            <td width="10px">
                            <form action="{{route('admin.pets.destroy', $pet)}}" method="POST">
                                @csrf
                                @method('delete')

                                <button type="submit" onclick="return confirm('¿Quiere Eliminar mascota?')" class="text-white rounded-lg btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                     </tr>
                 @endforeach

                </tbody>

            </table>
        </div>
    </div>
@stop
