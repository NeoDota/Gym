@extends('adminlte::page')

@section('title', 'Crear Notificación')

@section('content_header')
    <h1>Crear Notificación</h1>
@stop

@section('content')
    <div class="bg-white p-3 m-3 rounded-2xl shadow-2xl">
        @livewire('notification.notification-create')
    </div>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
@stop