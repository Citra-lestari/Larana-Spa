<section>
    <x-section.section-header
        TitleSection="Rejuvenate Your Body and Restore Your Inner Balance"
        DescSection="Discover a collection of soothing spa treatments designed to release tension, nourish your body, and restore inner harmony."
    />

    <div class="grid grid-cols-2 md:grid-cols-5 gap-5">
        <form class="col-span-3" action="">
            <div class="grid grid-cols-2 grid-rows-[auto_auto_auto] gap-5">
                <div class="contact-container">
                    <label for="">Full Name</label>
                    <input class="contact-input" type="text" placeholder="Enter your full name">
                </div>

                <div class="contact-container">
                    <label for="">Full Name</label>
                    <input class="contact-input" type="text" placeholder="Enter your full name">
                </div>

                <div class="contact-container">
                    <label for="">Full Name</label>
                    <input class="contact-input" type="text" placeholder="Enter your full name">
                </div>

                <div class="contact-container">
                    <label for="">Full Name</label>
                    <input class="contact-input" type="text" placeholder="Enter your full name">
                </div>

                <div class=" col-span-2">
                    <label for="">Full Name</label>
                    <textarea rows="10" class="contact-input" type="text" placeholder="Enter your full name"></textarea>
                </div>

                <x-ui.button variant="primary" class="w-fit">Contact Us</x-ui.button>
            </div>
        </form>

        <img src="{{ asset('asset/category.jpg') }}" alt="" class="col-span-2 rounded-lg h-104.75 w-full object-cover">
    </div>
</section>
