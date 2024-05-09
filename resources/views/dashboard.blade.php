@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Welcome')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Welcome')

{{-- Content --}}

@section('content_body')
    <p>Welcome to this beautiful admin panel.</p>
@stop

{{-- CSS --}}

@push('css')

@endpush
{{-- JS --}}
@push('js')
    
@endpush