@extends('adminlte::page')
@section('title', 'Tempano')

@section('content_header')
    <h1>Medicamentos</h1>
@stop

@section('content')
<div class="card">
    <p>Bienvenido a Administracion.</p>
    <div class="card-header">
        <a class="btn btn-primary" href="{{route('admin.tickets.create')}}">Agregar Medicamento</a>
    </div>
    @if (session('info'))
    <div class="alert alert-success">
        <strong>
            {{session('info')}}
        </strong>
    </div>
@endif
    <div class="card-body">
        <p>Bienvenido.</p>
        <table class="table table-striped">
            <thead>
                <th>ID</th>
                <th>Nombre</th>
                <th>Slug</th>
                <th>Forma Farmaceutica</th>
                <th>Marca</th>
                <th>Dosis</th>
                <th>Advertencia</th>                

                <th colspan="7"></th>

            </thead>

            <tbody>

             @foreach ($tickets as $ticket)
                 <tr>
                    <td>{{$ticket->id}}</td>
                    <td>{{$ticket->name}}</td>
                    <td>{{$ticket->slug}}</td>
                    <td>{{$ticket->form}}</td>
                    <td>{{$ticket->brand}}</td>
                    <td>{{$ticket->dosis}}</td>
                    <td>{{$ticket->caution}}</td>

                    <td width="10px">
                        <a  class="text-white rounded-lg btn btn-primary" href="{{route('admin.tickets.edit', $ticket)}}">Editar</a>
                    </td>
                    <td width="10px">
                        <form action="{{route('admin.tickets.destroy', $ticket)}}" method="POST">
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

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop