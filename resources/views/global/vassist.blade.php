@extends('adminlte::page')

@section('title', 'Registro Asistencia')

@section('content_header')
    <h1>Registro Asistencia</h1>
@stop

@section('content')
    <div class="bg-white p-3 m-3 rounded-2xl shadow-2xl">
        @livewire('assist.assist-create')
    </div>

    <div class="bg-white p-3 m-3 rounded-2xl shadow-2xl">
        @livewire('assist.assist-list')
    </div>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
@stop