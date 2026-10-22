<x-layout.user-layout>
    <section>
        <div class="detail-treatment-hero">
            <div class="detail-treatment-hero-img">
                <img src="asset/category.jpg" alt="" class="img-big">
                <div class="detail-treatment-hero-img-small h-fit">
                    <img src="asset/category.jpg" alt="" class="img-small">
                    <img src="asset/category.jpg" alt="" class="img-small">
                    <img src="asset/category.jpg" alt="" class="img-small">
                </div>
            </div>

            <div class="detail-treatment-content h-fit">
                <p class="badges-category">Body Treatments</p>
                <h2 class="treatment-name">Traditional Balinese </h2>
                <p class="detail-treatment-desc">A traditional full-body massage combining flowing movements, gentle stretching, and acupressure to ease tension and encourage deep relaxation.</p>

                <div class="duration-price mt-6">
                    <h3 class="badges-content">Duration</h3>
                    <h2 class="title-content">90 Minute</h2>
                </div>

                <div class="duration-price mt-2 mb-6">
                    <h3 class="badges-content">Duration</h3>
                    <h2 class="title-content">90 Minute</h2>
                </div>

                <x-ui.button variant="primary">Booking Now <iconify-icon icon="akar-icons:arrow-down-right" class="-rotate-90"></iconify-icon></x-ui.button>
            </div>
        </div>
    </section>

    <section class="detail-treatment-detail">
        <div class="detail-treatment-detail-card">
            <h1 class="title-detail-treatment">Before Your Treatment</h1>
            <ul class="mt-4 space-y-3 list-disc pl-5 marker:text-black/70 text-body text-black/70">
                <li>Inform Us About Your Health Condition</li>
                <li>Arrive a Little Early</li>
                <li>Avoid Heavy Meals Before Massage</li>
                <li>Share Your Comfort Preferences</li>
            </ul>
            <p class="desc-detail-treatment">A little preparation can make your treatment even more enjoyable. Follow these simple tips to help you feel comfortable, relaxed, and ready for your wellness experience.</p>
        </div>
        <div class="detail-treatment-detail-card">
            <h1 class="title-detail-treatment">Health Considerations</h1>
            <ul class="mt-4 space-y-3 list-disc pl-5 marker:text-black/70 text-body text-black/70">
                <li>Inform Us About Your Health Condition</li>
                <li>Arrive a Little Early</li>
                <li>Avoid Heavy Meals Before Massage</li>
                <li>Share Your Comfort Preferences</li>
            </ul>
            <p class="desc-detail-treatment">A little preparation can make your treatment even more enjoyable. Follow these simple tips to help you feel comfortable, relaxed, and ready for your wellness experience.</p>
        </div>
    </section>

    <x-section.homepage.terapist />
    <x-section.homepage.treatment />
    <x-section.cta />
</x-layout.user-layout>
