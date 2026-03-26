@extends('layout.main')
@section('title', 'Contacto')
@include('components.navbar')
@section('content')
    <div class="container-mt-5" style="padding: 16px;">
        <h1 class="text-2xl font-bold mb-4">Formulario de Contacto</h1>
        @if (session('success'))
            <div class="alert alert-success mb-4 p-4 bg-green-100 text-green-700 rounded">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{ route('form.make') }}" method="POST" class="bg-white p-6 rounded shadow-md">
            @csrf
            <div class="mb-3">
                <label for="nombre" class="block text-gray-700">Nombre:</label>
                <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}" class="w-full px-3 py-2 border rounded" required>
                @error('nombre')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="block text-gray-700">Email:</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" class="w-full px-3 py-2 border rounded" required>
                @error('email')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="block text-gray-700">Password:</label>
                <input type="password" id="password" name="password" value="{{ old('password') }}" class="w-full px-3 py-2 border rounded" required>
                @error('password')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Enviar</button>
        </form>
    </div>
@endsection