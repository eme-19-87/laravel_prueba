@extends('adminlte::page')

@section('title', 'IdenMac')

@section('content_header')
    <h1>Crear Etiqueta</h1>
@stop

@section('content')
<p>Bienvenido a Administracion.</p>
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.tags.store']) !!}

            {{-- Formulario de Categoria --}}
            {{-- Permite almacenar datos de una nueva categoria --}}
            <div class="form-group">
                {!! Form::label('name', 'Nombre') !!}
                {!! Form::text('name', NULL, ['class' => 'form-control', 'placeholder' => 'Ingresar la Etiqueta  ']) !!}

                @error('name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('slug', 'Slug') !!}
                {!! Form::text('slug', NULL, ['class' => 'form-control', 'placeholder' => 'Slug Automatico', 'readonly']) !!}

                @error('slug')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('description', 'Descripcion') !!}
                {!! Form::text('description', NULL, ['class' => 'form-control', 'placeholder' => 'Ingresar una descripcion']) !!}

                @error('description')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            {!! Form::submit('Crear Etiqueta', ['class' => 'btn btn-primary']) !!}
        </div>
    </div>
@stop

@section('js')


    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}">
    </script>

    <script>
        //Slug Automatica
        $(document).ready( function() {
          $("#name").stringToSlug({
            setEvents: 'keyup keydown blur',
            getPut: '#slug',
            space: '-'
           });
        });
    </script>
@endsection




{{-- @section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop --}}
