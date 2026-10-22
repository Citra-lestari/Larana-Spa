@props([
    'Name',
    'Specialist'
])


<div class="group terapist-card">
    <img src="asset/category.jpg" alt="" class="terapist-img">
    <div class="overlay-1"></div>
    <div class="terapist-content">
        <h3 class="terapist-name">{{ $Name }}</h3>
        <p class="terapist-specialist">{{ $Specialist }}</p>
    </div>
</div>
