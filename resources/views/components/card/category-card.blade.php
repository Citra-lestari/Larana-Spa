@props(['Name', 'Image'])

<div class="category-card">
    <img src="{{ asset($Image) }}" alt="{{ $Name }}" class="category-image">
    <div class="category-overlay"></div>
    <h3 class="category-name">
        {{ $Name }}
    </h3>
</div>
