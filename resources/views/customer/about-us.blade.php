<x-layout.user-layout>
    <section>
        <div class="relative rounded-2xl min-h-135 md:min-h-140 lg:min-h-153 flex flex-col lg:flex-row lg:items-end justify-end lg:justify-between p-5 md:p-8">
            <img src="asset/category.jpg" alt="" class="absolute inset-0 -z-20 h-full w-full object-cover rounded-2xl">
            <div class="absolute inset-0 -z-10 bg-black/75 rounded-2xl"></div>

            <div class="w-full text-white flex flex-col lg:flex-row justify-between">
                <h1 class="about-hero-title">About Us</h1>
                <p class="text-body text-white/80 mb-8 w-full lg:w-163">At Sari Bali, we bring the timeless beauty of Balinese wellness into every experience. Through traditional treatments, thoughtful care, and a peaceful atmosphere, we create a sanctuary where you can relax, restore your balance, and reconnect with your mind, body, and soul.</p>
            </div>
        </div>
    </section>

    <section class="about-detail">
        <img src="asset/category.jpg" alt="" class="about-img">
        <div class="">
            <p class="about-badges">Hygiene & Safety Standards</p>
            <h1 class="title-about">Before Your Treatment</h1>
            <ul class="mt-4 space-y-3 list-disc pl-5 marker:text-black/70 text-body text-black/70">
                <li>Inform Us About Your Health Condition</li>
                <li>Arrive a Little Early</li>
                <li>Avoid Heavy Meals Before Massage</li>
                <li>Share Your Comfort Preferences</li>
            </ul>
            <p class="desc-detail-treatment">A little preparation can make your treatment even more enjoyable. Follow these simple tips to help you feel comfortable, relaxed, and ready for your wellness experience.</p>
        </div>
    </section>

    <section class="about-detail">
        <div class="">
            <h1 class="title-story">Our Story, Inspired by the Beauty of Bali</h1>
            <p class="desc-detail-treatment mb-8">A little preparation can make your treatment even more enjoyable. Follow these simple tips to help you feel comfortable, relaxed, and ready for your wellness experience.</p>
            <x-ui.button variant="primary">Booking Now</x-ui.button>
        </div>
        <img src="asset/category.jpg" alt="" class="about-img">
    </section>

    <x-section.cta />
    <x-section.location />
    <x-section.contact />
</x-layout.user-layout>
