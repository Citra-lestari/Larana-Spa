
@props(['variant' => 'primary'])

@php
    $variants = [
        'primary' => 'bg-black hover:bg-black/80 text-white text-body font-medium px-7 py-2 rounded-3xl cursor-pointer',
        'secondary' => 'bg-white hover:bg-white/80 text-black text-body font-medium px-7 py-2 rounded-3xl cursor-pointer',
        'outline-primary' => 'bg-transparent hover:bg-black text-black hover:text-white text-body font-medium px-7 py-2 rounded-3xl border border-black cursor-pointer',
        'outline-secondary' => 'bg-transparent hover:bg-white text-white hover:text-black text-body font-medium px-7 py-2 rounded-3xl border border-white cursor-pointer',
    ];
@endphp

<button {{ $attributes->merge(['class' => $variants[$variant] ?? $variants['primary']]) }}>
    {{ $slot }}
</button>
