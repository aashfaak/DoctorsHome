<div class="card text-center">
    @if ($doctor->photo)
        <img src="{{ asset('storage/' . $doctor->photo) }}" alt="{{ $doctor->name }}"
             class="mx-auto h-24 w-24 rounded-full object-cover ring-2 ring-cyan-400/40">
    @else
        <div class="mx-auto flex h-24 w-24 items-center justify-center rounded-full bg-linear-to-br from-cyan-500 to-purple-500 text-3xl font-bold text-white">
            {{ mb_substr($doctor->name, 0, 1) }}
        </div>
    @endif
    <h3 class="mt-4 font-semibold text-white">{{ $doctor->name }}</h3>
    <p class="text-sm text-cyan-400">{{ $doctor->specialty->name }}</p>
    <p class="mt-1 text-xs text-slate-400">{{ $doctor->experience_years }} years experience</p>
    @if ($doctor->bio)
        <p class="mt-3 line-clamp-2 text-sm text-slate-400">{{ $doctor->bio }}</p>
    @endif
    <div class="mt-4 flex items-center justify-between border-t border-white/10 pt-4">
        <span class="font-semibold text-white">৳{{ number_format($doctor->fee) }}</span>
        
        <a href="/?doctor={{ $doctor->id }}#book" class="btn-grad !px-4 !py-2">Book</a>
    </div>
</div>