@extends('layouts/layout')
@section('title', 'About Me')

@section('content')
    <section class="max-w-2xl mx-auto mt-6 ">
        <div class="card bg-base-100 shadow">
            <h1 class="text-3xl font-bold">ABOUT ME</h1>
            <p class="mt-4 text-base-content/60">
                Mi nombre es {{ $_fullName }}, y estoy empezando a practicar con Laravel, a ver si me gusta y puedo profundizar más en él.
            </p>
            <br>
            <p class="mt-4 text-base-content/60">
                Mi juego favorito y el último que he jugado al mismo tiempo es {{ $_lastGame }}.<br>
                Su historia te engancha desde el primer momento y es un viaje de emociones durante todo el juegos.
            </p>
        </div>
    </section>

    @include('components/footer')
@endsection