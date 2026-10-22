<x-layout.user-layout>
    <x-section.section-header-detail
        Title="Explore Our Collection of Relaxing Treatments"
        Desc="Discover a carefully curated selection of treatments designed to help you unwind, release tension, and restore your inner balance."
    />

    <section>
        <x-section.section-header
            TitleSection="Curated Spa Packages for Your Ultimate Relaxation"
            DescSection="Explore our thoughtfully curated spa packages, each designed to bring you the perfect balance of relaxation, rejuvenation, and personalized care"
        />

        <div class="grid gap-3 mb-30">
            <div class="grid grid-cols-1 gap-3 sm:grid-cols-2 lg:grid-cols-3">
                <img src="{{ asset('asset/treatment 1.png') }}" alt="" class="aspect-2/1 w-full rounded-sm object-cover">
                <img src="{{ asset('asset/treatment 2.png') }}" alt="" class="aspect-2/1 w-full rounded-sm object-cover">
                <img src="{{ asset('asset/category.jpg') }}" alt="Therapist performing a facial massage" class="aspect-2/1 w-full rounded-sm object-cover">
            </div>

            <div class="grid grid-cols-1 gap-3 sm:grid-cols-2 lg:grid-cols-4">
                <img src="{{ asset('asset/treatment 1.png') }}" alt="" class="aspect-2/1 w-full rounded-sm object-cover">
                <img src="{{ asset('asset/treatment 2.png') }}" alt="" class="aspect-2/1 w-full rounded-sm object-cover">
                <img src="{{ asset('asset/cta.jpg') }}" alt="" class="aspect-2/1 w-full rounded-sm object-cover">
                <img src="{{ asset('asset/treatment 3.png') }}" alt="" class="aspect-2/1 w-full rounded-sm object-cover">
            </div>

            <div class="grid grid-cols-1 gap-3 sm:grid-cols-2 lg:grid-cols-3">
                <img src="{{ asset('asset/treatment 1.png') }}" alt="" class="aspect-2/1 w-full rounded-sm object-cover">
                <img src="{{ asset('asset/treatment 2.png') }}" alt="" class="aspect-2/1 w-full rounded-sm object-cover">
                <img src="{{ asset('asset/category.jpg') }}" alt="Therapist performing a facial massage" class="aspect-2/1 w-full rounded-sm object-cover">
            </div>

            <div class="grid grid-cols-1 gap-3 sm:grid-cols-2 lg:grid-cols-4">
                <img src="{{ asset('asset/treatment 1.png') }}" alt="" class="aspect-2/1 w-full rounded-sm object-cover">
                <img src="{{ asset('asset/treatment 2.png') }}" alt="" class="aspect-2/1 w-full rounded-sm object-cover">
                <img src="{{ asset('asset/cta.jpg') }}" alt="" class="aspect-2/1 w-full rounded-sm object-cover">
                <img src="{{ asset('asset/treatment 3.png') }}" alt="" class="aspect-2/1 w-full rounded-sm object-cover">
            </div>
        </div>
    </section>

    <x-section.testimonial />
    <x-section.location />
    <x-section.cta />
</x-layout.user-layout>
