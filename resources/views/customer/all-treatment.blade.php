<x-layout.user-layout>
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


            <form class="w-full lg:w-64 lg:shrink-0">
                <label for="search" class="block mb-2.5 text-sm font-medium text-heading sr-only ">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 inset-s-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-body" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/></svg>
                    </div>
                    <input type="search" id="search" class="block w-full p-3 ps-9 bg-grey/20 border rounded-3xl text-heading text-sm rounded-base focus:ring-brand focus:border-brand shadow-xs placeholder:text-body" placeholder="Search" required />
                </div>
            </form>
        </div>

        <div class="all-card4">
            <x-card.treatment-card
                Title="Swedish Massage"
                Desc="Experience the ultimate relaxation with our Swedish massage, designed to ease muscle tension and promote overall well-being."
                Image="asset/treatment 1.png"
                Price="Rp 250.000"
            />

            <x-card.treatment-card
                Title="Swedish Massage"
                Desc="Experience the ultimate relaxation with our Swedish massage, designed to ease muscle tension and promote overall well-being."
                Image="asset/treatment 1.png"
                Price="Rp 250.000"
            />

            <x-card.treatment-card
                Title="Swedish Massage"
                Desc="Experience the ultimate relaxation with our Swedish massage, designed to ease muscle tension and promote overall well-being."
                Image="asset/treatment 1.png"
                Price="Rp 250.000"
            />

            <x-card.treatment-card
                Title="Swedish Massage"
                Desc="Experience the ultimate relaxation with our Swedish massage, designed to ease muscle tension and promote overall well-being."
                Image="asset/treatment 1.png"
                Price="Rp 250.000"
            />

            <x-card.treatment-card
                Title="Swedish Massage"
                Desc="Experience the ultimate relaxation with our Swedish massage, designed to ease muscle tension and promote overall well-being."
                Image="asset/treatment 1.png"
                Price="Rp 250.000"
            />

            <x-card.treatment-card
                Title="Swedish Massage"
                Desc="Experience the ultimate relaxation with our Swedish massage, designed to ease muscle tension and promote overall well-being."
                Image="asset/treatment 1.png"
                Price="Rp 250.000"
            />

            <x-card.treatment-card
                Title="Swedish Massage"
                Desc="Experience the ultimate relaxation with our Swedish massage, designed to ease muscle tension and promote overall well-being."
                Image="asset/treatment 1.png"
                Price="Rp 250.000"
            />

            <x-card.treatment-card
                Title="Swedish Massage"
                Desc="Experience the ultimate relaxation with our Swedish massage, designed to ease muscle tension and promote overall well-being."
                Image="asset/treatment 1.png"
                Price="Rp 250.000"
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
