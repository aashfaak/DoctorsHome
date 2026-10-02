@extends('layouts.app')

@section('content')
@php
    $stats = [['500+', 'Expert Doctors'], ['50K+', 'Happy Patients'], ['4.9', 'Rating']];
    $about = [
        ['lucide-users', 'Experienced Care Team', 'Our caregivers combine expertise with compassion, ensuring every patient feels valued and safe.'],
        ['lucide-heart', 'Personalized Care Plans', 'We tailor every care plan to match each patient\'s medical and emotional needs.'],
        ['lucide-sparkles', 'Holistic Well-Being', 'From nutrition to emotional support, we promote all-round well-being.'],
        ['lucide-shield-check', 'Safe & Comfortable Environment', 'Clean, calm, and technologically advanced facilities for your peace of mind.'],
    ];
    $features = [
        ['lucide-video', 'Virtual Consultations', 'Connect with specialists through secure HD video calls from anywhere.'],
        ['lucide-house', 'Home Healthcare', 'Professional medical care delivered to your doorstep with certified teams.'],
        ['lucide-pill', 'E-Prescription', 'Digital prescriptions sent directly to your pharmacy with medication reminders.'],
        ['lucide-clock', '24/7 Availability', 'Round-the-clock access to medical professionals whenever you need support.'],
        ['lucide-lock', 'Privacy First', 'Your health data is encrypted and kept private at every step.'],
        ['lucide-file-heart', 'Digital Health Records', 'Access your complete medical history anytime in one secure place.'],
    ];
    $faqs = [
        ['How do virtual consultations work?', 'Book a slot, then join a secure video call with your doctor from your phone or computer.'],
        ['Is my health data secure and private?', 'Yes. Your records are encrypted and only shared with the doctor you consult.'],
        ['Can I get prescriptions through telemedicine?', 'Yes. Your doctor can issue a digital prescription right after the consultation.'],
        ['Do you offer home visits for medical care?', 'Yes. Choose Home Visit when booking and a doctor or nurse will come to you.'],
        ['What payment methods do you accept?', 'Cards, mobile banking and cash on visit. Online payments are processed securely.'],
        ['Is telemedicine available 24/7?', 'Yes. Emergency and video support are available around the clock.'],
    ];
@endphp

{{-- Hero --}}
    <section class="relative overflow-hidden">
    
    <div class="relative mx-auto grid max-w-6xl items-center gap-12 px-4 py-16 lg:grid-cols-2 lg:py-24">
        <div>
            <span class="chip text-emerald-300"><span class="h-2 w-2 rounded-full bg-emerald-400"></span> Available 24/7 &bull; Emergency Care</span>
            <h1 class="hero-float mt-6 whitespace-nowrap text-lg font-extrabold leading-tight sm:text-4xl">
                <span class="text-white">CARE.</span>
                <span class="bg-linear-to-r from-cyan-400 to-blue-500 bg-clip-text text-transparent">EXCELLENCE.</span>
                <span class="bg-linear-to-r from-purple-400 to-fuchsia-400 bg-clip-text text-transparent">FUTURE.</span>
            </h1>
            <p class="mt-5 max-w-md text-slate-400">Advanced healthcare that combines compassion and technology for a healthier tomorrow.</p>

            <div class="mt-8 grid max-w-md grid-cols-3 gap-3">
                @foreach ($stats as [$n, $l])
                    <div class="card !p-3 text-center">
                        <p class="text-xl font-bold text-cyan-400">{{ $n }}</p>
                        <p class="text-[11px] text-slate-400">{{ $l }}</p>
                    </div>
                @endforeach
            </div>

            <div class="mt-8 flex flex-wrap gap-3">
                <a href="#book" class="btn-grad"><x-lucide-video class="h-4 w-4" /> Book Appointment</a>
                <a href="/?type=lab#book" class="btn-ghost"><x-lucide-calendar class="h-4 w-4" /> Book Diagnostic Test</a>
            </div>
        </div>

        <div class="flex min-h-44 flex-col justify-center gap-4 sm:flex-row sm:items-center">
            <div class="card flex items-center gap-3 !p-3 text-xs">
                <x-lucide-badge-check class="h-5 w-5 text-emerald-400" />
                <span><b class="block text-white">Verified Doctors</b>100% Certified</span>
            </div>
            <div class="card flex items-center gap-3 !p-3 text-xs">
                <x-lucide-clock class="h-5 w-5 text-cyan-400" />
                <span><b class="block text-white">Quick Response</b>Under 15 mins</span>
            </div>
        </div>
    </div>
</section>

{{-- Who we are --}}
<section class="mx-auto max-w-6xl px-4 py-20 text-center">
    <span class="chip">Who we are</span>
    <h2 class="mt-5 text-3xl font-bold text-white md:text-4xl">
        <span class="text-grad">Care that respects,</span><br>comforts, and supports
    </h2>
    <p class="mx-auto mt-4 max-w-xl text-slate-400">We believe in more than treatment, we deliver comfort, confidence, and care that truly matters.</p>
    <div class="mt-10 grid gap-4 text-left sm:grid-cols-2 lg:grid-cols-4">
        @foreach ($about as [$icon, $title, $text])
            <div class="card">
                <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-linear-to-br from-cyan-500 to-purple-500">
                    <x-dynamic-component :component="$icon" class="h-5 w-5 text-white" />
                </span>
                <h3 class="mt-4 font-semibold text-white">{{ $title }}</h3>
                <p class="mt-2 text-sm text-slate-400">{{ $text }}</p>
            </div>
        @endforeach
    </div>
    <a href="/about" class="btn-grad mt-10">Know More</a>
</section>

{{-- Platform features --}}
<section class="border-y border-white/10 bg-panel/50">
    <div class="mx-auto max-w-6xl px-4 py-20 text-center">
        <span class="chip">Platform features</span>
        <h2 class="mt-5 text-3xl font-bold text-white md:text-4xl">
            <span class="text-grad">Healthcare reimagined</span><br>for digital age
        </h2>
        <p class="mx-auto mt-4 max-w-xl text-slate-400">Experience next-generation telemedicine with cutting-edge technology that puts you in control of your health journey.</p>
        <div class="mt-10 grid gap-4 text-left sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($features as [$icon, $title, $text])
                <div class="card">
                    <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-white/10">
                        <x-dynamic-component :component="$icon" class="h-5 w-5 text-cyan-400" />
                    </span>
                    <h3 class="mt-4 font-semibold text-white">{{ $title }}</h3>
                    <p class="mt-2 text-sm text-slate-400">{{ $text }}</p>
                </div>
            @endforeach
        </div>
        <a href="#book" class="btn-grad mt-10">Start Your Journey</a>
    </div>
</section>
{{-- Doctors --}}
@if ($doctors->isNotEmpty())
<section class="mx-auto max-w-6xl px-4 py-20 text-center">
    <span class="chip">Our doctors</span>
    <h2 class="mt-5 text-3xl font-bold text-white md:text-4xl">
        <span class="text-grad">Meet our</span> specialists
    </h2>
    <div class="mt-10 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
        @foreach ($doctors->take(6) as $doctor)
            @include('partials.doctor-card')
        @endforeach
    </div>
    <a href="/doctors" class="btn-ghost mt-10">View all doctors</a>
</section>
@endif
{{-- Booking form --}}
<section id="book" class="mx-auto max-w-2xl px-4 py-20 text-center"
    x-data="{ type: '{{ old('type', request('type', 'video')) }}' }"
    @if (session('success') || $errors->any()) x-init="$el.scrollIntoView()" @endif>
    <span class="chip">Book appointment</span>
    <h2 class="mt-5 text-3xl font-bold text-white md:text-4xl">
        <span class="text-grad">Your health journey</span><br>starts here
    </h2>
    <p class="mt-4 text-slate-400">Schedule a consultation with our expert healthcare professionals at your convenience.</p>

    @if (session('success'))
        <div class="mt-8 rounded-xl border border-emerald-400/30 bg-emerald-400/10 p-4 text-sm text-emerald-300">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('appointments.store') }}" method="POST" class="card mt-8 space-y-5 text-left">
        @csrf
        <input type="hidden" name="type" :value="type">
        <div>
            <label class="mb-2 block text-sm font-medium text-white">Appointment Type</label>
            <div class="grid grid-cols-2 gap-2 text-sm sm:grid-cols-3">
                @foreach (['video' => 'Video Consultation', 'home' => 'Home Visit', 'clinic' => 'In-Clinic', 'lab' => 'Lab Test', 'checkup' => 'Health Checkup'] as $key => $label)
                    <button type="button" @click="type = '{{ $key }}'"
                        :class="type === '{{ $key }}' ? 'border-cyan-400 bg-cyan-400/10 text-white' : 'border-white/10 text-slate-400'"
                        class="rounded-xl border px-2 py-3 transition">{{ $label }}</button>
                @endforeach
            </div>
        </div>
           <div x-show="!['lab','checkup'].includes(type)">
    <label class="mb-2 block text-sm font-medium text-white">Doctor <span class="text-slate-500">(optional)</span></label>
    <select name="doctor_id" class="input" :disabled="['lab','checkup'].includes(type)">
        <option value="">Any available doctor</option>
        @foreach ($doctors as $d)
            <option value="{{ $d->id }}" @selected(old('doctor_id', request('doctor')) == $d->id)>
                {{ $d->name }} - {{ $d->specialty->name }}
            </option>
        @endforeach
    </select>
    @error('doctor_id') <p class="mt-1 text-xs text-rose-400">{{ $message }}</p> @enderror
</div>
        <div class="grid gap-4 sm:grid-cols-2">
            <div>
                <input name="name" value="{{ old('name') }}" class="input" placeholder="Full Name" required>
                @error('name') <p class="mt-1 text-xs text-rose-400">{{ $message }}</p> @enderror
            </div>
            <div>
                <input name="email" type="email" value="{{ old('email') }}" class="input" placeholder="Email Address">
                @error('email') <p class="mt-1 text-xs text-rose-400">{{ $message }}</p> @enderror
            </div>
            <div>
                <input name="phone" value="{{ old('phone') }}" class="input" placeholder="Phone" required>
                @error('phone') <p class="mt-1 text-xs text-rose-400">{{ $message }}</p> @enderror
            </div>
            <div>
                <input name="date" type="date" value="{{ old('date') }}" min="{{ date('Y-m-d') }}" class="input" required>
                @error('date') <p class="mt-1 text-xs text-rose-400">{{ $message }}</p> @enderror
            </div>
            <div class="sm:col-span-2">
                <input name="time" type="time" value="{{ old('time') }}" class="input" required>
                @error('time') <p class="mt-1 text-xs text-rose-400">{{ $message }}</p> @enderror
            </div>
        </div>

        <textarea name="notes" rows="3" class="input"
                    :placeholder="['lab','checkup'].includes(type) ? 'Which test or package do you need? (e.g. CBC, blood sugar)' : 'Additional notes (optional)'">{{ old('notes') }}</textarea>
        <button class="btn-grad w-full">Confirm Appointment</button>
    </form>
</section>

{{-- FAQ --}}
<section class="mx-auto max-w-3xl px-4 pb-20 text-center" x-data="{ open: null }">
    <span class="chip">FAQ</span>
    <h2 class="mt-5 text-3xl font-bold text-white md:text-4xl"><span class="text-grad">Questions?</span><br>We've got answers</h2>
    <div class="mt-10 space-y-3 text-left">
        @foreach ($faqs as $i => [$q, $a])
            <div class="card !p-0">
                <button @click="open = open === {{ $i }} ? null : {{ $i }}" class="flex w-full items-center justify-between gap-4 p-4 text-sm font-medium text-white">
                    {{ $q }}
                    <x-lucide-chevron-down class="h-4 w-4 shrink-0 transition" ::class="open === {{ $i }} && 'rotate-180'" />
                </button>
                <p x-show="open === {{ $i }}" x-cloak class="px-4 pb-4 text-sm text-slate-400">{{ $a }}</p>
            </div>
        @endforeach
    </div>
</section>
@endsection