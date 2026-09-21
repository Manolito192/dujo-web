@props([
    'active' => false,
    'route' => null,
    'mobile' => false,
])

@if ($mobile)
    <a href="{{ route($route) }}" {{ $attributes }} class="border-b border-white/10 py-3 text-sm font-medium transition {{ $active ? 'text-amber-400' : 'text-stone-300 hover:text-amber-400' }}">
        {{ $slot }}
    </a>
@else
    <a href="{{ route($route) }}" {{ $attributes }} class="text-sm font-medium transition {{ $active ? 'text-amber-400' : 'text-stone-300 hover:text-amber-400' }}">
        {{ $slot }}
    </a>
@endif