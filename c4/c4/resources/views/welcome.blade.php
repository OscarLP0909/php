@extends('layout.main')
@section('title', 'Bienvenido')
@section('content')
    <div class="container-mt-5" style="padding: 16px;">
        <h1 class="text-2xl font-bold mb-4">Bienvenido a la aplicación de gestión de archivos y formularios</h1>
        <p class="mb-4">Utiliza el menú para acceder a las diferentes funcionalidades:</p>
        <ul class="list-disc pl-5">
            <li><a href="{{ route('archivo.index') }}" class="text-blue-500 hover:underline">Gestión de Archivos</a></li>
            <li><a href="{{ route('form.make') }}" class="text-blue-500 hover:underline">Formulario de Contacto</a></li>
        </ul>
    </div>
@endsection