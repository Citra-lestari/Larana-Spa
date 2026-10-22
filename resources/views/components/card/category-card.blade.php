@props(['Name'])

<div class="category-card">
    <img src="{{ asset('asset/category.jpg') }}" alt="Category" class="category-image">
    <div class="category-overlay"></div>
    <h3 class="category-name">
        {{ $Name }}
    </h3>
</div>
