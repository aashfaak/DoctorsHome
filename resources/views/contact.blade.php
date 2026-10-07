@extends('layouts.app')

@section('title', 'Contact - DoctorsHome')

@section('content')
<section class="mx-auto max-w-5xl px-4 py-16">
    <div class="text-center">
        <span class="chip">Contact</span>
        <h1 class="mt-5 text-4xl font-bold text-white"><span class="text-grad">We are here to help</span></h1>
    </div>

    <div class="mt-10 grid gap-6 md:grid-cols-2">
        <div class="space-y-4">
            @foreach ([['lucide-phone', 'Phone', '+880 1884 148505'], ['lucide-mail', 'Email', 'doctorshome@gmail.com'], ['lucide-map-pin', 'Address', 'Chattogram, Bangladesh']] as [$icon, $label, $value])
                <div class="card flex items-center gap-4">
                    <x-dynamic-component :component="$icon" class="h-5 w-5 text-cyan-400" />
                    <div>
                        <p class="text-xs text-slate-500">{{ $label }}</p>
                        <p class="text-white">{{ $value }}</p>
                    </div>
                </div>
            @endforeach
        </div>

        <form action="{{ route('contact.store') }}" method="POST" class="card space-y-4">
            @csrf
            @if (session('success'))
                <div class="rounded-xl border border-emerald-400/30 bg-emerald-400/10 p-3 text-sm text-emerald-300">{{ session('success') }}</div>
            @endif
            <div>
                <input name="name" value="{{ old('name') }}" class="input" placeholder="Your name" required>
                @error('name') <p class="mt-1 text-xs text-rose-400">{{ $message }}</p> @enderror
            </div>
            <div class="grid gap-4 sm:grid-cols-2">
                <input name="phone" value="{{ old('phone') }}" class="input" placeholder="Phone">
                <input name="email" type="email" value="{{ old('email') }}" class="input" placeholder="Email">
            </div>
            <div>
                <textarea name="message" rows="4" class="input" placeholder="How can we help?" required>{{ old('message') }}</textarea>
                @error('message') <p class="mt-1 text-xs text-rose-400">{{ $message }}</p> @enderror
            </div>
            <button class="btn-grad w-full">Send message</button>
        </form>
    </div>
</section>
@endsection