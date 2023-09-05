@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="">Bienvenido/a</h1>
@stop

@section('content')
    <p class="text-3x bg-green-900">Este es el Panel de administracion de IdenMac</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">    
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop