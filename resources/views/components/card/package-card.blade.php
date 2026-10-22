@props([
    'Title',
    'Price',
    'Desc',
    'Benefits' => [],
])

<div class="group package-card">
    <h3 class="package-title">{{ $Title }}</h3>
    <h4 class="package-badges">Start At</h4>

    <div class="flex gap-1">
        <h2 class="package-price">Rp. {{ $Price }}</h2>
        <h4 class="package-badges">/person</h4>
    </div>

    <p class="package-desc">{{ $Desc }}</p>

    <x-ui.button variant="outline-primary" class="package-button">Booking Now</x-ui.button>
    <div class="package-line"></div>

    {{-- Benefits --}}
    <ul class="mt-5 space-y-3">
        @foreach ($Benefits as $benefit)
            <li class="package-benefit">
                <iconify-icon icon="akar-icons:check"></iconify-icon>
                <span>{{ $benefit }}</span>
            </li>
        @endforeach
    </ul>
</div>
