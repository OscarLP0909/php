@extends('layouts/layout')
@section('title', 'Ejercicio 2 - About Me')
@section('content')
    <section class="max-w-2xl mx-auto mt-8">
        <div class="card bg-base-100 shadow">
            <div class="card-body">
                <h1 class="text-3xl font-bold">About Me</h1>
                <p class="mt-4 text-base-content/60">
                    Me llamo Óscar Luque Porca, tengo 24 años y estoy empezando a aprender Laravel.<br>
                    El último libro que me he leído es "Veinte mil leguas del viaje submarino de Julio Verne"
                </p>
            </div>
        </div>
    </section>
@include('components/footer')
@endsection