@extends('adminlte::page')

@section('title', 'Cursos')

@section('content_header')
    <h1>Asignar Curso</h1>
@stop

@section('content')
    <div class="bg-white p-3 m-3 rounded-2xl shadow-2xl">
        @livewire('course.course-create')
        @livewire('course.course-list')
    </div>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
<script>
    new DataTable('#example', {
        layout: {
            topStart: {
                buttons: [
                    {
                        text: 'Crear Nuevo',
                        action: function (e, dt, node, config) {
                            alert('Button 1 clicked on');
                        },
                        className: 'btn btn-primary bg-blue'
                    },
                    { extend: 'copy', text:'<i class="fa-solid fa-copy"></i>', titleAttr: 'Copiar', className: 'btn btn-dark' },
                    { extend: 'excel', text:'<i class="fa-solid fa-file-excel"></i>', titleAttr: 'Exportar a Excel', className: 'btn btn-success' },
                    { extend: 'pdf', text:'<i class="fa-solid fa-file-pdf"></i>', titleAttr: 'Exportar en PDF', className: 'btn btn-danger' },
                    { extend: 'print', text:'<i class="fa-solid fa-print"></i>', titleAttr: 'Imprimir', className: 'bg-cyan-700' },
                    { extend: 'colvis', text:'Filtrar', titleAttr: '', className: '' },
                ]
            },
        },
        lengthMenu: [5, 10, 15, 20, 100, 200, 500],
        /* columnDefs: [
            { orderable: false, targets: [5, 6] },
        ], */
        select: true,
        lengthMenu: [5, 10, 15, 20, 100, 200, 500],
        responsive: true,
        pageLength:13,
        destroy:true,
        language: {
            "decimal": "",
            "emptyTable": "No hay información",
            "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
            "infoEmpty": "Mostrando 0 a 0 de 0 Entradas",
            "infoFiltered": "(Filtrado de _MAX_ entradas en total)",
            "infoPostFix": "",
            "thousands": ",",
            "lengthMenu": "Mostrar _MENU_ Entradas",
            "loadingRecords": "Cargando...",
            "processing": "Procesando...",
            "search": "Buscar:",
            "zeroRecords": "Sin resultados encontrados",
            "paginate": {
                "first": "Primero",
                "last": "Último",
                "next": "Siguiente",
                "previous": "Anterior"
            }
        },
    });
</script>
@stop