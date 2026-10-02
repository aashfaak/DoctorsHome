@extends('layouts.app')

@section('title', 'About Us - DoctorsHome')

@section('content')
<section class="mx-auto max-w-4xl px-4 py-16 text-center">
    <span class="chip">About us</span>
    <h1 class="mt-5 text-4xl font-bold text-white"><span class="text-grad">Healthcare, made simple</span></h1>
    <p class="mx-auto mt-4 max-w-2xl text-slate-400">
        DoctorsHome connects families in Chattogram with qualified doctors, nurses and diagnostic services,
        so good care is never more than a booking away.
    </p>

    <div class="mt-10 grid gap-4 sm:grid-cols-3">
        @foreach ([['500+', 'Expert doctors'], ['50K+', 'Happy patients'], ['24/7', 'Support']] as [$n, $l])
            <div class="card">
                <p class="text-3xl font-bold text-cyan-400">{{ $n }}</p>
                <p class="mt-1 text-sm text-slate-400">{{ $l }}</p>
            </div>
        @endforeach
    </div>

    <div class="mt-10 grid gap-4 text-left md:grid-cols-2">
        <div class="card">
            <h2 class="font-semibold text-white">Our mission</h2>
            <p class="mt-2 text-sm text-slate-400">To make trusted medical care easy to reach, affordable and comfortable for every family.</p>
        </div>
        <div class="card">
            <h2 class="font-semibold text-white">How we work</h2>
            <p class="mt-2 text-sm text-slate-400">Every doctor is verified. Every booking is confirmed by our team. Your health data stays private.</p>
        </div>
    </div>
</section>
@endsection