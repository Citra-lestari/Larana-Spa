@props([
    'Order',
    'Title',
    'Desc'
])

<div class="why-choose-us-card group">
    <h2 class="order-why-choose-us">{{ $Order }}</h2>
    <h3 class="title-why-choose-us">{{ $Title }}</h3>
    <p class="desc-why-choose-us">{{ $Desc }}</p>
</div>
