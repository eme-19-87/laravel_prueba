@extends('adminlte::page')
@section('title', 'Iden MAC')

@section('content_header')
    <h1>Iden MAC</h1>
@stop

@section('content')
<p>Bienvenido a Administracion.</p>
<div class="card">
    <div class="card-body">
        {!! Form::model($post,['route' => ['admin.posts.update',$post],'method' => 'put']) !!}

        {!! Form::hidden('user_id', auth()->user()->id) !!}

        <div class="form-group">
            {!! Form::label('title', 'Nombre:') !!}
            {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del post']) !!}

            @error('title')
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>

        <div class="form-group">
            {!! Form::label('slug', 'Slug:') !!}
            {!! Form::text('slug', NULL, ['class' => 'form-control', 'placeholder' => 'Slug del post', 'readonly']) !!}

            @error('slug')
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>

        <div class="form-group">
            {!! Form::label('category_id', 'Categoria:') !!}
            {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}

            @error('category_id')
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>

        <div class="form-group">
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
        </div>


        <div class="form-group">
            <p class="font-weight-bold mb-1">Estado:</p>

            <label class="mr-2">
                {!! Form::radio('status', 1, true) !!}
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
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
