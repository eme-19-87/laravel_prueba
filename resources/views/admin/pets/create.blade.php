@extends('adminlte::page')

@section('title', 'Iden Mac')

@section('content_header')
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script>
    <h1>Registrar Mascota</h1>
@stop

@section('content')
<p>Bienvenido a Administracion.</p>
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.pets.store', 'files' => true]) !!}

            {!! Form::hidden('user_id', auth()->user()->id) !!}

            {{-- Formulario de Categoria --}}
            {{-- Permite almacenar datos de una nueva categoria --}}
            <div class="form-group">
                {!! Form::label('file', 'Foto') !!}
                <div class="image-wrapper">
                    @isset ($post->image)
                        <img id="picture" src="{{Storage::url($post->image->url)}}" alt="">
                    @else
                        <img id="imagePreview" width="200" height="200" src="https://images.unsplash.com/photo-1583337130417-3346a1be7dee?auto=format&fit=crop&q=80&w=2688&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                    @endisset
                </div>
                {!! Form::file('file', ['accept' => 'image/*', 'id'=>'inputFile', 'class' => 'form-control-file', 'onchange'=>'changeImagePreview()']) !!}
                @error('file')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('name', 'Nombre') !!}
                {!! Form::text('name', NULL, ['class' => 'form-control', 'placeholder' => 'Ingresar Nombre']) !!}

                @error('name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('pet_type', 'Tipo de Mascota') !!}
                {!! Form::select('pet_type',$pet_type, NULL, ['class' => 'form-control', 'placeholder' => 'Seleccionar']) !!}

                @error('pet_type')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('breed', 'Raza') !!}
                {!! Form::text('breed', NULL, ['class' => 'form-control', 'placeholder' => 'Raza']) !!}

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

            
            


            {!! Form::submit('Almacenar', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
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
        function changeImagePreview(){
            var input = document.getElementById('inputFile')
            var file = input.files[0]
            var imagePreview = document.getElementById('imagePreview')
            var reader = new FileReader();
            reader.onload = function (e){
            // convert image file to base64 string
            imagePreview.src = e.target.result;
            }
            reader.readAsDataURL(file);
    }

        /*  ClassicEditor
          .create( document.querySelector( '#editor' ) )
          .catch( error => {
            console.error( error );
        } ); */
    </script>
@endsection