<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AllSectionSeeder extends Seeder
{
    /**
     * Run the database seeds for all section tables.
     */
    public function run(): void
    {
        // HOMEPAGE SECTIONS

        // Navbar
        DB::table('navbars')->insert([
            'image' => 'asset/navbar-logo.png',
            'btn_primary' => 'Contact Us',
            'btn_primary_link' => 'https://wa.me',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Section Hero
        DB::table('section_heroes')->insert([
            'title' => 'A Sanctuary for Your Mind, Body & Soul',
            'desc' => 'Discover a peaceful escape where soothing treatments, holistic wellness, and expert care come together to restore your balance, renew your energy, and nurture your mind, body, and soul.',
            'btn_primary' => 'See Our Service',
            'btn_primary_link' => '/all-treatment',
            'title_badges' => '2K+',
            'desc_badges' => 'Dedicated to making every visit a peaceful escape.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Section Category
        DB::table('section_categories')->insert([
            'title' => 'A Collection of Treatments for Rest & Renewal',
            'desc' => 'Discover our thoughtfully curated treatments, designed to restore balance, ease tension, and rejuvenate your body and mind. Find your moment of calm through authentic Balinese wellness and personalized care.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Section Package
        DB::table('section_packages')->insert([
            'title' => 'Curated Spa Packages for Your Ultimate Relaxation',
            'desc' => 'Explore our thoughtfully curated spa packages, each designed to bring you the perfect balance of relaxation, rejuvenation, and personalized care',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Section Treatment
        DB::table('section_treatments')->insert([
            'title' => 'Rejuvenate Your Body and Restore Your Inner Balance',
            'desc' => 'Discover a collection of soothing spa treatments designed to release tension, nourish your body, and restore inner harmony.',
            'btn_primary' => '',
            'btn_primary_link' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Section Why Choose Us
        DB::table('section_why_choose_us')->insert([
            'title' => "More Than Just Relaxation, It's an Experience to Remember",
            'desc' => 'Experience more than relaxation through personalized treatments, skilled therapists, and a soothing atmosphere designed to leave you feeling refreshed, restored, and renewed.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Section Terapist
        DB::table('section_terapists')->insert([
            'title' => 'Meet the Dedicated Hands Behind Your Serenity',
            'desc' => 'Meet our female and male wellness professionals. Sample profiles and illustrative photos.',
            'btn_primary' => 'See All Terapist',
            'btn_primary_link' => '/all-terapist',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Section CTA
        DB::table('section_ctas')->insert([
            'title' => 'Your Moment of Serenity and Rejuvenation Awaits You',
            'desc' => 'Escape the busyness of everyday life and immerse yourself in a peaceful sanctuary of soothing treatments, personalized care, and rejuvenating experiences designed to restore your balance.',
            'image' => 'asset/cta.jpg',
            'btn_primary' => 'Contact Us',
            'btn_primary_link' => 'https://wa.me',
            'btn_secondary' => 'See Our Service',
            'btn_secondary_link' => '/all-treatment',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Section Testimonial
        DB::table('section_testimonials')->insert([
            'title' => 'A Touch of Care, A World of Difference',
            'desc' => 'Discover the heartfelt stories of our guests and how our thoughtful treatments, attentive service, and personalized care have made a meaningful difference in their wellness journeys, leaving them feeling refreshed, renewed, and deeply relaxed.',
            'btn_primary' => 'See All Testimonial',
            'btn_primary_link' => '/all-testimonial',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Section Gallery
        DB::table('section_galleries')->insert([
            'title' => 'Explore the Beauty of Our Spa Sanctuary',
            'desc' => 'Take a closer look at our peaceful sanctuary, where every detail is thoughtfully designed to create a calming and luxurious spa experience.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Section Location
        DB::table('section_locations')->insert([
            'title' => 'Find Us, Your Sanctuary of Relaxation Awaits',
            'desc' => 'Discover your peaceful escape at Sari Bali, where relaxation and traditional Balinese wellness come together.',
            'location' => 'Tegallalang, Ubud Gianyar, Bali Alamat lengkap: menunggu konfirmasi pemilik.',
            'day_operasional' => 'Monday–Sunday',
            'time_operasional' => '10.00–20.00 WITA',
            'desc_operasional' => 'Holiday and special hours are not yet available. Please check with the administrator before heading there.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Section FAQ
        DB::table('section_faqs')->insert([
            'title' => 'Your Questions, Thoughtfully Answered with Care',
            'desc' => 'Explore helpful answers to common questions about our spa treatments, booking process, and wellness services. We’re here to make every step of your experience simple, comfortable, and worry-free, so you can relax and enjoy your time with us.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Section Footer
        DB::table('section_footers')->insert([
            'image' => 'asset/footer-logo.png',
            'desc' => 'Larana is your sanctuary for relaxation and renewal, offering thoughtfully curated treatments and personalized care to nurture your mind, body, and soul',
            'copyright' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        // DETAIL PAGE SECTIONS

        // Detail Page All Treatment
        DB::table('detail_page_all_treatments')->insert([
            'title' => 'Explore Our Collection of Relaxing Treatments',
            'desc' => 'Discover a carefully curated selection of treatments designed to help you unwind, release tension, and restore your inner balance.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Detail Page Detail Treatment Section Terapist
        DB::table('detail_page_detail_treatment_section_terapists')->insert([
            'title' => 'Meet the Therapist for Your Treatment',
            'desc' => 'Meet the skilled therapists who specialize in your chosen treatment. With professional expertise and attentive care, they are dedicated to providing a comfortable, relaxing experience tailored to your needs.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Detail Page All Package Section Hero
        DB::table('detail_page_all_package_section_heroes')->insert([
            'title' => 'Your Journey to Complete Wellness',
            'desc' => 'Discover thoughtfully curated spa packages that bring together traditional Balinese treatments and soothing wellness rituals. Find the perfect combination to relax your body, refresh your mind, and restore your inner balance.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Detail Page All Package Section Package
        DB::table('detail_page_all_package_section_packages')->insert([
            'title' => 'More Than Just Relaxation, Its an Experience to Remember',
            'desc' => 'Experience more than relaxation through personalized treatments, skilled therapists, and a soothing atmosphere designed to leave you feeling refreshed, restored, and renewed.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Detail Page All Terapist Section Hero
        DB::table('detail_page_all_terapist_section_heroes')->insert([
            'title' => 'Our Therapists, Your Wellness Partners',
            'desc' => 'Meet our skilled and dedicated therapists who are passionate about your well-being. With professional expertise and thoughtful care, they create a soothing experience to help you relax.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Detail Page All Testimoni Section Hero
        DB::table('detail_page_all_testimoni_section_heroes')->insert([
            'title' => 'Stories of Serenity, Shared by Our Guests',
            'desc' => 'Discover the heartfelt experiences of our guests and see how Sari Bali brings moments of relaxation, comfort, and serenity to every wellness journey.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Detail Page About Page Section Hero
        DB::table('detail_page_about_page_section_heroes')->insert([
            'title' => 'About Us',
            'desc' => 'At Sari Bali, we bring the timeless beauty of Balinese wellness into every experience. Through traditional treatments, thoughtful care, and a peaceful atmosphere, we create a sanctuary where you can relax, restore your balance, and reconnect with your mind, body, and soul.',
            'image' => 'asset/aboutUsHero.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Detail Page About Page Section Safety
        DB::table('detail_page_about_page_section_safeties')->insert([
            'badges' => 'Hygiene & Safety Standards',
            'title' => 'Comfort begins with a sense of security.',
            'desc' => 'Your well-being is at the heart of everything we do. We strive to maintain a clean, hygienic, and welcoming environment so you can relax and enjoy every treatment with greater peace of mind.',
            'image' => 'asset/hygiene.png',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Detail Page About Page Section Our Story
        DB::table('detail_page_about_page_section_our_stories')->insert([
            'title' => 'Our Story, Inspired by the Beauty of Bali',
            'desc' => 'At Sari Bali, we believe true wellness begins with balance and inner peace. Inspired by the rich traditions of Bali, we offer thoughtful treatments and a tranquil sanctuary where every guest can relax, recharge, and reconnect with themselves.',
            'image' => 'asset/our story.png',
            'btn_primary' => 'Meet Our Therapists',
            'btn_primary_link' => '/all-terapist',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Detail Page About Page Section Contact
        DB::table('detail_page_about_page_section_contacts')->insert([
            'title' => 'Your Wellness Journey Starts with a Conversation',
            'desc' => 'Discover your peaceful escape at Sari Bali, where relaxation and traditional Balinese wellness come together.',
            'image' => 'asset/contact us.png',
            'btn_primary' => 'Send Message',
            'btn_primary_link' => '#',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Detail Page All Blog Section Hero
        DB::table('detail_page_all_blog_section_heroes')->insert([
            'title' => 'Nurture Your Mind, Body & Soul',
            'desc' => 'Explore wellness tips, self-care rituals, and the timeless wisdom of Balinese traditions to help you find balance, embrace relaxation, and nurture your well-being every day.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Detail Page All Blog Section Blog
        DB::table('detail_page_all_blog_section_blogs')->insert([
            'title' => 'Stories to Inspire Your Wellness Journey',
            'desc' => 'Discover inspiring stories, practical wellness tips, and self-care rituals to help you relax, restore balance, and bring a little more serenity into your everyday life.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Detail Page Gallery Page Section Hero
        DB::table('detail_page_gallery_page_section_heroes')->insert([
            'title' => 'A Glimpse Into Our World of Serenity',
            'desc' => 'Explore the peaceful atmosphere, soothing treatments, and beautiful details that make every moment at Sari Bali special.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Detail Page FAQ Page Section Hero
        DB::table('detail_page_faq_page_section_heroes')->insert([
            'title' => 'A Glimpse Into Our World of Serenity',
            'desc' => 'Explore the peaceful atmosphere, soothing treatments, and beautiful details that make every moment at Sari Bali special.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
