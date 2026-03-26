@extends('layout.main')
@section('title', 'Archivo')
@include('components.navbar')
@section('content')
    <div class="container-mt-5" style="padding: 16px;">
        <h2>Gestión de Archivos</h2>
        @if (session('success'))
            <div class="alert alert-success mb-4 p-4 bg-green-100 text-green-700 rounded">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger mb-4 p-4 bg-red-100 text-red-700 rounded">
                {{ session('error') }}
            </div>
        @endif
        <form action="{{ route('fichero.upload') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="archivo" class="mb-4">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Enviar</button>
            @error('archivo')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
            @enderror
        </form>

        <h3 class="mt-6 mb-4">Archivos Subidos</h3>
        <ul class="list-disc pl-5">
            @foreach ($archivos as $archivo)
                <li>
                    <a href="{{ route('fichero.download', ['archivo' => basename($archivo)]) }}"
                        class="text-blue-500 hover:underline">
                        {{ basename($archivo) }}
                    </a>
                </li>
            @endforeach
        </ul>

        <h3 class="mt-6 mb-4">Eliminar Archivos</h3>
        <ul class="list-disc pl-5">
            @foreach ($archivos as $archivo)
                <li>
                    <form action="{{ route('fichero.delete', ['archivo' => basename($archivo)]) }}" method="POST"
                        onsubmit="return confirm('¿Estás seguro de que deseas eliminar este archivo?');" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:underline">Eliminar {{ basename($archivo) }}</button>
                    </form>
                </li>
            @endforeach
        </ul>

    </div>
@endsection