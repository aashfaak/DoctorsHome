@extends('layouts.app')

@section('title', 'Our Doctors - DoctorsHome')

@section('content')
<section class="mx-auto max-w-6xl px-4 py-16 text-center">
    <span class="chip">Our doctors</span>
    <h1 class="mt-5 text-4xl font-bold text-white"><span class="text-grad">Find your doctor</span></h1>
    <p class="mx-auto mt-4 max-w-xl text-slate-400">Verified specialists available for video, home and clinic visits.</p>

    <div class="mt-10 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
        @forelse ($doctors as $doctor)
            @include('partials.doctor-card')
        @empty
            <p class="col-span-full text-slate-400">No doctors available right now.</p>
        @endforelse
    </div>
</section>
@endsection