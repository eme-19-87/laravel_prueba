@extends('adminlte::page')

@section('title', 'IdenMac')

@section('content_header')
    <h1>Agregar Vacuna</h1>
@stop

@section('content')
<p>Bienvenido a Administracion.</p>
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.vaccines.store']) !!}

            {{-- Formulario de Categoria --}}
            {{-- Permite almacenar datos de una nueva categoria --}}
            <div class="form-group">
                {!! Form::label('name', 'Nombre') !!}
                {!! Form::text('name', NULL, ['class' => 'form-control', 'placeholder' => 'Ingresar la Categoria  ']) !!}

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
                {!! Form::label('form', 'Form') !!}
                {!! Form::text('form', NULL, ['class' => 'form-control', 'placeholder' => 'Ingresar ']) !!}

                @error('')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('brand', 'Brand') !!}
                {!! Form::text('brand', NULL, ['class' => 'form-control', 'placeholder' => 'Ingresar una descripcion']) !!}

                @error('')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('dosis', 'Dosis') !!}
                {!! Form::text('dosis', NULL, ['class' => 'form-control', 'placeholder' => 'Ingresar una descripcion']) !!}

                @error('')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('caution', 'Caution') !!}
                {!! Form::text('caution', NULL, ['class' => 'form-control', 'placeholder' => 'Ingresar una descripcion']) !!}

                @error('')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            {!! Form::submit('Crear', ['class' => 'btn btn-primary']) !!}
        </div>
    </div>
@stop

@section('js')
    
    //Plugin para asignar automaticamente una Slug a cada categoria
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