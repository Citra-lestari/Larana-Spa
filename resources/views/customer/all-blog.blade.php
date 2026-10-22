<x-layout.user-layout>
        <x-section.section-header-detail
            Title="Explore Our Collection of Relaxing Treatments"
            Desc="Discover a carefully curated selection of treatments designed to help you unwind, release tension, and restore your inner balance."
        />

    <section>
        <x-section.section-header
            TitleSection="Explore Our Collection of Relaxing Treatments"
            DescSection="Discover a carefully curated selection of treatments designed to help you unwind, release tension, and restore your inner balance."
        />

        <div class="filter-search">
            <div class="filter">
                <x-ui.button variant="primary">All Testimonial</x-ui.button>
                <x-ui.button variant="outline-primary">Massage Therapy</x-ui.button>
                <x-ui.button variant="outline-primary">Facial & Skin Care</x-ui.button>
                <x-ui.button variant="outline-primary">Body Treatments</x-ui.button>
                <x-ui.button variant="outline-primary">Foot & Hand Care</x-ui.button>
            </div>
        </div>

        <div class="all-card4">
            <x-card.blog-card
                Title="The Art of Traditional Balinese Massage"
                Desc="Discover the traditional techniques of Balinese massage, combining flowing movements and gentle pressure to create a soothing and relaxing experience."
                Image="asset/treatment 1.png"
                Date="October 08, 2026"
            />

            <x-card.blog-card
                Title="The Art of Traditional Balinese Massage"
                Desc="Discover the traditional techniques of Balinese massage, combining flowing movements and gentle pressure to create a soothing and relaxing experience."
                Image="asset/treatment 1.png"
                Date="October 08, 2026"
            />

            <x-card.blog-card
                Title="The Art of Traditional Balinese Massage"
                Desc="Discover the traditional techniques of Balinese massage, combining flowing movements and gentle pressure to create a soothing and relaxing experience."
                Image="asset/treatment 1.png"
                Date="October 08, 2026"
            />

            <x-card.blog-card
                Title="The Art of Traditional Balinese Massage"
                Desc="Discover the traditional techniques of Balinese massage, combining flowing movements and gentle pressure to create a soothing and relaxing experience."
                Image="asset/treatment 1.png"
                Date="October 08, 2026"
            />

            <x-card.blog-card
                Title="The Art of Traditional Balinese Massage"
                Desc="Discover the traditional techniques of Balinese massage, combining flowing movements and gentle pressure to create a soothing and relaxing experience."
                Image="asset/treatment 1.png"
                Date="October 08, 2026"
            />

            <x-card.blog-card
                Title="The Art of Traditional Balinese Massage"
                Desc="Discover the traditional techniques of Balinese massage, combining flowing movements and gentle pressure to create a soothing and relaxing experience."
                Image="asset/treatment 1.png"
                Date="October 08, 2026"
            />

            <x-card.blog-card
                Title="The Art of Traditional Balinese Massage"
                Desc="Discover the traditional techniques of Balinese massage, combining flowing movements and gentle pressure to create a soothing and relaxing experience."
                Image="asset/treatment 1.png"
                Date="October 08, 2026"
            />

            <x-card.blog-card
                Title="The Art of Traditional Balinese Massage"
                Desc="Discover the traditional techniques of Balinese massage, combining flowing movements and gentle pressure to create a soothing and relaxing experience."
                Image="asset/treatment 1.png"
                Date="October 08, 2026"
            />
        </div>

        <div class="flex justify-center mt-8">
            {{-- PAGINATION --}}
            <div class="container-pagination justify-center col-span-2 md:col-span-3">
                {{-- Previous --}}
                <button type="button" aria-label="Previous page">
                    <span class="iconify -rotate-180" data-icon="weui:arrow-filled" data-width="24"></span>
                </button>
                {{-- Nomor Halaman --}}
                <button type="button" class="pagination-active" aria-current="page">1</button>
                <button type="button">2</button>
                <button type="button">3</button>
                {{-- Next --}}
                <button type="button" aria-label="Next page">
                    <span class="iconify" data-icon="weui:arrow-filled" data-width="24"></span>
                </button>
            </div>
        </div>
    </section>

</x-layout.user-layout>
