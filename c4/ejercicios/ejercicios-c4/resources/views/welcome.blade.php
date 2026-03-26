@extends('layout.main')
@section('title', 'Ejercicios Formularios y Archivos')
@include('components.navbar')
@section('content')
    <div class="container-mt-5" style="padding: 16px;">
        <h1 class="text-2xl font-bold mb-4">Bienvenido a los Ejercicios de Formularios y Archivos</h1>
        <p class="mb-4">En esta sección encontrarás ejercicios prácticos para trabajar con formularios y archivos en Laravel.</p>
        <ul class="list-disc pl-5">
            <li><a href="{{ route('form.make') }}" class="text-blue-500 hover:underline">Ejercicio de Formularios</a></li>
            <li><a href="{{ route('archivo.index') }}" class="text-blue-500 hover:underline">Ejercicio de Archivos</a></li>
        </ul>
    </div>
@endsection