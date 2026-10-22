@props([
    'Title',
    'Desc',
    'Date',
])

<div class="blog-card group">
    <img src="asset/category.jpg" alt="" class="blog-img">
    <div class="blog-content">
        <h3 class="blog-title">{{ $Title }}</h3>
        <p class="blog-desc">{{ $Desc }}</p>
        <div class="flex items-center gap-2 mt-2">
            <iconify-icon icon="boxicons:calendar-alt-filled" class="date-icon"></iconify-icon>
            <p class="blog-date">{{ $Date }}</p>
        </div>
    </div>
</div>
