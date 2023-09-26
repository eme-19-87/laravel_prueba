@extends('adminlte::page')

@section('title', 'Iden Mac')

@section('content_header')
    <h1>Registrar Mascota</h1>
@stop

@section('content')
<p>Bienvenido a Administracion.</p>
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.pets.store']) !!}

            {!! Form::hidden('user_id', auth()->user()->id) !!}

            {{-- Formulario de Categoria --}}
            {{-- Permite almacenar datos de una nueva categoria --}}
            <div class="form-group">
                {!! Form::label('name', 'Nombre') !!}
                {!! Form::text('name', NULL, ['class' => 'form-control', 'placeholder' => 'Ingresar Nombre']) !!}

                @error('name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('breed', 'Cria') !!}
                {!! Form::text('breed', NULL, ['class' => 'form-control', 'placeholder' => 'Cria']) !!}

                @error('breed')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('age', 'Edad') !!}
                {!! Form::text('age', NULL, ['class' => 'form-control', 'placeholder' => 'Edad']) !!}

                @error('age')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('gender', 'Genero') !!}
                {!! Form::text('gender', NULL, ['class' => 'form-control', 'placeholder' => 'Genero']) !!}

                @error('gender')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('features', 'Caracteristicas') !!}
                {!! Form::text('features', NULL, ['class' => 'form-control', 'placeholder' => 'Caracteristicas']) !!}

                @error('features')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('city', 'Ciudad') !!}
                {!! Form::text('city', NULL, ['class' => 'form-control', 'placeholder' => 'Ciudad']) !!}

                @error('city')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('pet_type_id', 'Raza') !!}
                {!! Form::select('pet_type_id',$pet_type, NULL, ['class' => 'form-control', 'placeholder' => 'Raza']) !!}

                @error('pet_type_id')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>


            {!! Form::submit('Almacenar', ['class' => 'btn btn-primary']) !!}
        </div>
    </div>
@stop

@section('js')
    {{-- CKEditor --}}
    {{-- <script src="https://cdn.ckeditor.com/ckeditor5/35.2.1/classic/ckeditor.js"></script> --}}

    {{-- Plugin para asignar automaticamente una Slug a cada categoria --}}
    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}">
    </script>

    <script>
        //Slug Automatica
        $(document).ready( function() {
          $("#title").stringToSlug({
            setEvents: 'keyup keydown blur',
            getPut: '#slug',
            space: '-'
           });
        });

        /*  ClassicEditor
          .create( document.querySelector( '#editor' ) )
          .catch( error => {
            console.error( error );
        } ); */
    </script>
@endsection