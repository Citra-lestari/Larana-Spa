<section>
    <x-section.section-header
        TitleSection="A Collection of Treatments for Rest & Renewal"
        DescSection="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex"
    />

    <div>
        <div class="swiper fourCardSwiper">
            <div class="swiper-wrapper">
                @foreach ($categories as $category)
                    <div class="swiper-slide">
                        <x-card.category-card
                            :Name="$category->name"
                            :Image="$category->image"
                        />
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
