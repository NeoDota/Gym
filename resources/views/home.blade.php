@extends('adminlte::page')

@section('title', 'Home')

@section('content_header')
<h1>HOME</h1>
@stop

@section('content')

<div class="columns-6">
    <div>
        @livewire('home.home-user-create')
    </div>
    <div break-before-column>
        @livewire('home.home-pay-create')
    </div>
</div>

<div class="bg-white p-3 m-3 rounded-2xl shadow-2xl {{-- columns-2 gap-8 --}}">
    <div class="break-before-column p-2">
        @livewire('home.home-assist-create')
    </div>
</div>

<div class="columns-2">
    <div class="bg-white p-3 m-3 rounded-2xl shadow-2xl">
        @livewire('home.home-pay-list')
    </div>

    <div class="bg-white p-3 m-3 rounded-2xl shadow-2xl break-before-column">
        @livewire('home.home-assist-list')
    </div>
</div>

@stop

@section('css')
{{-- Add here extra stylesheets --}}
{{--
<link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
<script>
    // Obtener la hora y fecha actual
    let now = new Date();
    let horaActual = now.getHours().toString().padStart(2, '0') + ':' + now.getMinutes().toString().padStart(2, '0');
    let fechaActual = now.toISOString().split('T')[0];

    // Establecer la hora y fecha actual en los campos de entrada
    document.getElementById('hora').value = horaActual;
    document.getElementById('fecha').value = fechaActual;

    // Bloquear los campos de entrada
    document.getElementById('hora').disabled = true;
    document.getElementById('fecha').disabled = true;
</script>

<script>
    $(document).ready(function() {
        $(document).on('submit', '#frmDatos', function(e){
            e.preventDefault();
            Swal.fire({
                position: "top",
                icon: "success",
                title: "Se Creo el Pago",
                showConfirmButton: false,
                timer: 1200
            });
        });
    });
</script>

<script>
    $(document).ready(function() {
        $(document).on('submit', '#frmDatos1', function(e){
            e.preventDefault();
            Swal.fire({
                position: "top",
                icon: "success",
                title: "Se Creo la Asistencia",
                showConfirmButton: false,
                timer: 1200
            });
        });
    });
</script>

<script>
    $(document).ready(function() {
        $(document).on('submit', '#frmDatos2', function(e){
            e.preventDefault();
            Swal.fire({
                position: "top",
                icon: "success",
                title: "Se Creo el Usuario",
                showConfirmButton: false,
                timer: 1200
            });
        });
    });
</script>
@stop