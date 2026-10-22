@props([
    'Title',
    'Desc',
    'Image',
    'Price',
])

<div class="treatment-card group">
    <img src="{{ $Image }}" alt="{{ $Title }}" class="treatment-img">
    <div class="treatment-content">
        <h3 class="treatment-title">{{ $Title }}</h3>
        <p class="treatment-desc">{{ $Desc }}</p>
        <p class="treatment-price">{{ $Price }}</p>
    </div>
</div>
