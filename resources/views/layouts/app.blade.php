<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'DoctorsHome - Healthcare Reimagined')</title>
    <link rel="icon" type="image/png" href="{{ asset('logo.png') }}">
    <meta name="description" content="@yield('description', 'Book verified doctors, nurses and lab tests at home in Chattogram. Video consultation, home visit and health checkup.')">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
@php
    $services = [
        ['Video Consultation', 'lucide-video'],
        ['Home Visit', 'lucide-calendar'],
        ['Lab Tests', 'lucide-file-text'],
        ['Health Checkup', 'lucide-stethoscope'],
    ];
    $links = ['Home' => '/', 'Doctors' => '#', 'About Us' => '#', 'Contact' => '#'];
    $pages = ['Doctors' => '/doctors', 'About Us' => '#', 'Contact' => '#'];
    $pages = ['Doctors' => '/doctors', 'About Us' => '/about', 'Contact' => '/contact'];
@endphp

<header x-data="{ open: false, sub: false }" class="sticky top-0 z-40 border-b border-white/10 bg-ink/80 backdrop-blur">
    <div class="mx-auto flex max-w-6xl items-center justify-between px-4 py-3">
        <a href="/" class="flex items-center gap-3">
    <img src="{{ asset('logo.png') }}" alt="DoctorsHome" class="h-10 w-10 rounded-xl object-contain">
    <span>
        <span class="block font-bold leading-none text-white">DoctorsHome</span>
        <span class="text-[10px] tracking-wide text-slate-500">HEALTHCARE REIMAGINED</span>
    </span>
</a>

        {{-- Desktop nav --}}
        <nav class="hidden items-center gap-7 text-sm lg:flex">
            <a href="/" class="hover:text-white">Home</a>
            <div class="group relative">
                <button class="flex items-center gap-1 hover:text-white">Services <x-lucide-chevron-down class="h-4 w-4" /></button>
                <div class="invisible absolute left-0 top-full w-52 pt-3 opacity-0 transition group-hover:visible group-hover:opacity-100">
                    <div class="card !p-2">
                        @foreach ($services as [$label, $icon])
                            <a href="#" class="flex items-center gap-3 rounded-lg px-3 py-2 hover:bg-white/10">
                                <x-dynamic-component :component="$icon" class="h-4 w-4 text-cyan-400" /> {{ $label }}
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
            @foreach ($pages as $l => $url)
                <a href="{{ $url }}" class="block py-3">{{ $l }}</a>
            @endforeach
        </nav>

        <div class="hidden items-center gap-3 lg:flex">
            <a href="tel:999" class="btn-ghost !py-2"><x-lucide-phone class="h-4 w-4" /> Emergency Call</a>
            <a href="/#book" class="btn-grad !py-2"><x-lucide-calendar class="h-4 w-4" /> Book Appointment</a>
        </div>

        <button @click="open = true" class="rounded-lg border border-white/10 p-2 lg:hidden" aria-label="Open menu">
            <x-lucide-menu class="h-5 w-5" />
        </button>
    </div>

    {{-- Mobile menu --}}
    <div x-show="open" x-cloak class="fixed inset-0 z-50 flex flex-col bg-ink p-4 lg:hidden">
        <div class="flex items-center justify-between border-b border-white/10 pb-3">
<span class="flex items-center gap-2 font-bold text-white">
    <img src="{{ asset('logo.png') }}" alt="" class="h-8 w-8 rounded-lg object-contain"> DoctorsHome
</span>            <button @click="open = false" class="rounded-lg border border-white/10 p-2" aria-label="Close menu">
                <x-lucide-x class="h-5 w-5" />
            </button>
        </div>
        <nav class="mt-4 flex-1 space-y-1 overflow-y-auto text-sm font-medium text-white">
            <a href="/" class="block py-3">Home</a>
            <button @click="sub = !sub" class="flex w-full items-center justify-between py-3">
                Services <x-lucide-chevron-down class="h-4 w-4 transition" ::class="sub && 'rotate-180'" />
            </button>
            <div x-show="sub" x-cloak class="space-y-1 pl-3 font-normal text-slate-400">
                @foreach ($services as [$label, $icon])
                    <a href="#" class="flex items-center gap-3 py-2">
                        <x-dynamic-component :component="$icon" class="h-4 w-4" /> {{ $label }}
                    </a>
                @endforeach
            </div>
            @foreach (['Doctors', 'About Us', 'Contact'] as $l)
                <a href="#" class="block py-3">{{ $l }}</a>
            @endforeach
        </nav>
        <div class="space-y-3">
            <a href="tel:999" class="btn-ghost w-full"><x-lucide-phone class="h-4 w-4" /> Emergency Call</a>
            <a href="/#book" @click="open = false" class="btn-grad w-full"><x-lucide-calendar class="h-4 w-4" /> Book Appointment</a>
        </div>
    </div>
</header>

<main>@yield('content')</main>

<footer class="border-t border-white/10 bg-panel/60">
    <div class="mx-auto grid max-w-6xl gap-8 px-4 py-12 text-sm md:grid-cols-4">
        <div class="md:col-span-1">
            <p class="font-bold text-white">DoctorsHome</p>
            <p class="mt-3 text-slate-400">Revolutionizing healthcare with technology and compassion for a healthier tomorrow.</p>
        </div>
        <div>
    <p class="font-semibold text-white">Quick Links</p>
    <ul class="mt-3 space-y-2 text-slate-400">
        <li><a href="/about" class="hover:text-white">About Us</a></li>
        <li><a href="/doctors" class="hover:text-white">Doctors</a></li>
        <li><a href="/contact" class="hover:text-white">Contact</a></li>
    </ul>
</div>
        <div>
            <p class="font-semibold text-white">Services</p>
<ul class="mt-3 space-y-2 text-slate-400">
    @foreach ($services as [$label])
        <li><a href="/services#{{ Str::slug($label) }}" class="hover:text-white">{{ $label }}</a></li>
    @endforeach
</ul>
        </div>
        <div>
            <p class="font-semibold text-white">Contact Us</p>
            <ul class="mt-3 space-y-2 text-slate-400">
                <li>+880 1884148505</li><li>doctorshome@gmail.com</li><li>Chattogram, Bangladesh</li>
            </ul>
        </div>
    </div>
    <div class="border-t border-white/10 py-4 text-center text-xs text-slate-500">
        &copy; {{ date('Y') }} DoctorsHome. All rights reserved.
    </div>
</footer>
</body>
</html>