
<section class="py-12 md:py-20">
    <x-section.section-header
        TitleSection="Rejuvenate Your Body and Restore Your Inner Balance"
        DescSection="Discover a collection of soothing spa treatments designed to release tension, nourish your body, and restore inner harmony."
    />

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-10 xl:gap-x-12 mt-8 md:mt-12">

        {{-- Left column --}}
        <div
            id="faq-accordion-left"
            data-accordion="collapse"
            class="min-w-0"
        >
            <x-card.faq-card
                Id="reservation"
                Question="Do I need to make a reservation before visiting?"
                Answer="We recommend booking in advance to secure your preferred treatment and time slot. Walk-in guests are welcome, subject to availability."
            />

            <x-card.faq-card
                Id="duration"
                Question="How long does each treatment take?"
                Answer="Treatment duration depends on the service you choose. Please check our treatment menu for details about each session."
            />

            <x-card.faq-card
                Id="preparation"
                Question="What should I bring or prepare before my treatment?"
                Answer="We recommend arriving a little early to relax before your session. Our team will provide the essentials needed for your treatment."
            />

            <x-card.faq-card
                Id="therapist-gender"
                Question="Can I request a male or female therapist?"
                Answer="Yes, you may request a male or female therapist when making your reservation. Requests are subject to availability."
            />
        </div>

        {{-- Right column --}}
        <div
            id="faq-accordion-right"
            data-accordion="collapse"
            class="min-w-0"
        >
            <x-card.faq-card
                Id="cancellation"
                Question="What is your cancellation or rescheduling policy?"
                Answer="Please contact us as early as possible if you need to cancel or reschedule your appointment. Our team will help you with the available options."
            />

            <x-card.faq-card
                Id="payment"
                Question="What payment methods do you accept?"
                Answer="Please contact our team for information about the payment methods currently available at our spa."
            />

            <x-card.faq-card
                Id="gift-cards"
                Question="Do you offer gift cards or treatment packages?"
                Answer="Please reach out to our team to learn about available gift options and treatment packages."
            />

            <x-card.faq-card
                Id="preferred-therapist"
                Question="Can I choose my preferred therapist?"
                Answer="Yes, you may request a preferred therapist when booking. Your request will depend on therapist availability."
            />
        </div>

    </div>
</section>
