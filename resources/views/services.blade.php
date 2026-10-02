@extends('layouts.app')

@section('title', 'Services - DoctorForHome')

@section('content')
@php
    $items = [
        ['video-consultation', 'lucide-video', 'Video Consultation', 'Talk to a verified doctor over a secure video call. Get advice, a diagnosis and a digital prescription without leaving home.', 'video'],
        ['home-visit', 'lucide-calendar', 'Home Visit', 'A doctor or nurse comes to your home for checkups, injections, dressing and elderly care.', 'home'],
        ['lab-tests', 'lucide-file-text', 'Lab Tests', 'Book blood and urine tests. Samples are collected at home and reports are shared digitally.', 'lab'],
        ['health-checkup', 'lucide-stethoscope', 'Health Checkup', 'Complete health screening packages to track your health and catch problems early.', 'checkup'],
    ];
@endphp
<section class="mx-auto max-w-6xl px-4 py-16 text-center">
    <span class="chip">Our services</span>
    <h1 class="mt-5 text-4xl font-bold text-white"><span class="text-grad">Care that comes to you</span></h1>
    <p class="mx-auto mt-4 max-w-xl text-slate-400">Choose how you want to see a doctor. Every service is delivered by verified professionals.</p>

    <div class="mt-10 grid gap-4 text-left md:grid-cols-2">
        @foreach ($items as [$id, $icon, $title, $text, $type])
            <div id="{{ $id }}" class="card scroll-mt-24">
                <span class="flex h-11 w-11 items-center justify-center rounded-xl bg-linear-to-br from-cyan-500 to-purple-500">
                    <x-dynamic-component :component="$icon" class="h-5 w-5 text-white" />
                </span>
                <h2 class="mt-4 text-lg font-semibold text-white">{{ $title }}</h2>
                <p class="mt-2 text-sm text-slate-400">{{ $text }}</p>
                <a href="/?type={{ $type }}#book" class="btn-grad mt-5">Book now</a>
            </div>
        @endforeach
    </div>
</section>
@endsection