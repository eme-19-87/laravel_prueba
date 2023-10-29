@extends('adminlte::page')
@section('title', 'Iden MAC')

@section('content_header')
    <h1>Iden Mac</h1>
@stop

@section('content')
<p>Bienvenido a Administracion.</p>
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.posts.store', 'autocomplete' => 'off', 'files' => true]) !!}

            {!! Form::hidden('user_id', auth()->user()->id) !!}

            <div class="form-group">
                {!! Form::label('title', 'Título:') !!}
                {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Título del post']) !!}

                @error('title')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('slug', 'Slug:') !!}
                {!! Form::text('slug', NULL, ['class' => 'form-control', 'placeholder' => 'Slug del post, para uso del software unicamente', 'readonly']) !!}

                @error('slug')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('category_id', 'Categoría:') !!}
                {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}

                @error('category_id')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>

            {{-- <div class="form-group">
              <p class="font-weight-bold mb-1">Etiquetas:</p>
              @foreach ($tags as $tag)

                 <label class="mr-4">
                    {!! Form::checkbox('tags[]', $tag->id, null) !!}
                    {{$tag->name}}
                 </label>

              @endforeach

              @error('tags')
              <br>
              <small class="text-danger">{{$message}}</small>
              @enderror
            </div> --}}


            <div class="form-group">
                <p class="font-weight-bold mb-1">Estado:</p>

                <label class="mr-2">
                    {!! Form::radio('status', 1) !!}
                    Borrador
                </label>

                <label>
                    {!! Form::radio('status', 2) !!}
                    Publicado
                </label>

                @error('status')
              <small class="text-danger">{{$message}}</small>
               @enderror
            </div>

            <div class="row">
              <div class="col">
                  <div class="image-wrapper">
                      @isset ($post->image)
                          <img id="picture" src="{{Storage::url($post->image->url)}}" alt="">
                      @else
                          <img id="picture" src="https://images.unsplash.com/photo-1583337130417-3346a1be7dee?auto=format&fit=crop&q=80&w=2688&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                      @endisset
                  </div>
              </div>
              <div class="col">
                  <div class="form-group">
                      {!! Form::label('file', 'Imagen del Post') !!}
                      {!! Form::file('file', ['accept' => 'image/*', 'class' => 'form-control-file']) !!}
                      @error('file')
                          <span class="text-danger">{{$message}}</span>
                      @enderror
                  </div>
              </div>
            </div>

           {{--  <p class="font-weight-bold mb-1">Extracto:</p> --}}
            <div class="form-group">
              {!! Form::label('extract:') !!}
              {!! Form::textarea('extract', null, ['class' => 'form-control']) !!}

              @error('extract')
              <small class="text-danger">{{$message}}</small>
            @enderror
            </div>



            {{-- <p class="font-weight-bold mt-4">Body:</p> --}}
            <div class="mt-4 form-group">
              {!! Form::label('body:') !!}
              {!! Form::textarea('body', null, ['class' => 'form-control']) !!}

              @error('body')
            <small class="text-danger">{{$message}}</small>
            @enderror
            </div>



             {!! Form::submit('Crear Post', ['class' => 'mt-4 text-white btn btn-primary'])!!}
             {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <style>
        .image-wrapper {
            position: relative;
            padding-bottom: 56.25%;
        }

        .image-wrapper img {
            position: absolute;
            object-fit: cover;
            width: 100%;
            height: 100%;
        }
    </style>
@stop


@section('js')
     {{-- CKEditor --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/35.2.1/classic/ckeditor.js"></script>

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

          // Cambiar la imagen

          document.getElementById("file").addEventListener('change', cambiar);

          function cambiar(event) {
            var file = event.target.files[0];

            var reader = new FileReader();
            reader.onload = function(e){
              document.getElementById("picture").setAttribute('src', e.target.result);
            }

            reader.readAsDataURL(file);
          }

        /*  ClassicEditor
          .create( document.querySelector( '#extract' ) )
          .catch( error => {
            console.error( error );
        } );

        ClassicEditor
          .create( document.querySelector( '#body' ) )
          .catch( error => {
            console.error( error );
        } ); */
    </script>
@endsection
