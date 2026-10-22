@props([
    'Desc',
    'Name',
    'Date',
])

<div class="testimoni-card">
    <p class="testimoni-desc">{{ $Desc }}</p>
    <div class="testimoni-identity">
        <img src="asset/category.jpg" alt="" class="testimoni-img">
        <div class="testimoni-name-date">
            <p class="testimoni-name">{{ $Name }}</p>
            <p class="testimoni-date">{{ $Date }}</p>
        </div>
    </div>
</div>
