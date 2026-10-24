<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MasterDataSeeder extends Seeder
{
    /**
     * Run the database seeds for master data.
     */
    public function run(): void
    {
        // Specialists
        $specialists = [
            ['name' => 'Senior Massage Therapist', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Aromatherapy Specialist', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Reflexology Expert', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Body Scrub & Facialist', 'created_at' => now(), 'updated_at' => now()],
        ];
        DB::table('specialists')->insert($specialists);

        // Categories
        $categories = [
            [
                'name' => 'Massage Therapy',
                'image' => 'asset/Massage Therapy.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Facial and Skin Care',
                'image' => 'asset/Facial Skin Care.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Body Treatments',
                'image' => 'asset/Body Treatments.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Foot and Hand Care',
                'image' => 'asset/Foot Hand Care.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        DB::table('categories')->insert($categories);

        // Treatments
        $treatments = [
            [
                'category_id' => 1,
                'image' => 'asset/Traditional Balinese.png',
                'name' => 'Traditional Balinese ',
                'desc' => 'A traditional full-body massage combining flowing movements, gentle stretching, and acupressure to ease tension and encourage deep relaxation.',
                'price' => 'Rp 250.000',
                'duration' => '2026-10-22',
                'before_treatment' => 'A little preparation can make your treatment even more enjoyable. Follow these simple tips to help you feel comfortable, relaxed, and ready for your wellness experience.',
                'health_treatment' => 'Your comfort and well-being always come first. Let us know about any health conditions or concerns beforehand so we can help determine the most suitable treatment for you.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 1,
                'image' => 'asset/Warm Stone Therapy.png',
                'name' => 'Warm Stone Therapy',
                'desc' => 'A soothing massage using smooth, warmed stones and gentle movements to help relax tense muscles and create a comforting spa experience.',
                'price' => 'Rp 350.000',
                'duration' => '2026-10-22',
                'before_treatment' => 'A little preparation can make your treatment even more enjoyable. Follow these simple tips to help you feel comfortable, relaxed, and ready for your wellness experience.',
                'health_treatment' => 'Your comfort and well-being always come first. Let us know about any health conditions or concerns beforehand so we can help determine the most suitable treatment for you.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 2,
                'image' => 'asset/Rejuvenating Facial.png',
                'name' => 'Rejuvenating Facial',
                'desc' => 'A refreshing facial ritual featuring gentle cleansing, exfoliation, and a nourishing mask to leave your skin feeling clean, soft, and revitalized.',
                'price' => 'Rp 300.000',
                'duration' => '2026-10-22',
                'before_treatment' => 'A little preparation can make your treatment even more enjoyable. Follow these simple tips to help you feel comfortable, relaxed, and ready for your wellness experience.',
                'health_treatment' => 'Your comfort and well-being always come first. Let us know about any health conditions or concerns beforehand so we can help determine the most suitable treatment for you.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 3,
                'image' => 'asset/Relaxing Foot Reflexology.png',
                'name' => 'Relaxing Foot Reflexology',
                'desc' => 'A focused foot massage using gentle pressure techniques to ease tired feet and offer a comforting pause after a long day.',
                'price' => 'Rp 180.000',
                'duration' => '2026-10-22',
                'before_treatment' => 'A little preparation can make your treatment even more enjoyable. Follow these simple tips to help you feel comfortable, relaxed, and ready for your wellness experience.',
                'health_treatment' => 'Your comfort and well-being always come first. Let us know about any health conditions or concerns beforehand so we can help determine the most suitable treatment for you.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        DB::table('treatments')->insert($treatments);

        // Packages
        $packages = [
            [
                'name' => 'Serenity Escape Package',
                'price' => '450.000',
                'price_unit' => '/ 120 Menit',
                'desc' => 'Paket relaksasi komplit memadukan Balinese Massage, Body Scrub Bunga Melati, dan Mandi Rendam Rempah Hangat.',
                'btn_primary' => 'Reservasi Paket',
                'btn_primary_link' => 'https://wa.me/6281234567890?text=Halo%20Larana%20Spa,%20saya%20ingin%20reservasi%20Paket%20Serenity%20Escape',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Royal Couple Bliss Ritual',
                'price' => '850.000',
                'price_unit' => '/ 150 Menit (2 Orang)',
                'desc' => 'Momen berkualitas bersama pasangan dengan perawatan aromaterapi privat, body mask cokelat premium, dan herbal floral bath.',
                'btn_primary' => 'Reservasi Couple',
                'btn_primary_link' => 'https://wa.me/6281234567890?text=Halo%20Larana%20Spa,%20saya%20ingin%20reservasi%20Paket%20Royal%20Couple',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pure Glow & Rejuvenate',
                'price' => '520.000',
                'price_unit' => '/ 135 Menit',
                'desc' => 'Kombinasi eksklusif pemijatan seluruh tubuh dan Organic Botanical Facial untuk kesegaran raga dan kecerahan wajah.',
                'btn_primary' => 'Reservasi Paket',
                'btn_primary_link' => 'https://wa.me/6281234567890?text=Halo%20Larana%20Spa,%20saya%20ingin%20reservasi%20Paket%20Pure%20Glow',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        DB::table('packages')->insert($packages);

        // Terapists
        $terapists = [
            [
                'name' => 'Ni Wayan Sukmawati',
                'specialist_id' => 1,
                'image' => 'terapists/terapist-1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Dewi Anggraini',
                'specialist_id' => 2,
                'image' => 'terapists/terapist-2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Putu Melati Indah',
                'specialist_id' => 3,
                'image' => 'terapists/terapist-3.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ratna Kusuma Wardani',
                'specialist_id' => 4,
                'image' => 'terapists/terapist-4.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        DB::table('terapists')->insert($terapists);

        // Blogs
        $blogs = [
            [
                'title' => '5 Khasiat Aromaterapi Lavender untuk Mengatasi Stres dan Insomnia',
                'desc' => 'Minyak esensial lavender telah dikenal selama berabad-abad sebagai agen penenang alami. Temukan bagaimana aroma lembut ini dapat menyeimbangkan ritme sirkadian tubuh dan menghadirkan tidur nyenyak berkualitas.',
                'image' => 'blogs/blog-lavender.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Pentingnya Detoksifikasi Tubuh Melalui Pijat Refleksi Rutin',
                'desc' => 'Titik-titik syaraf pada telapak kaki memiliki korelasi langsung dengan organ pencernaan dan peredaran limfatik. Pelajari mengapa sesi refleksi mingguan efektif membantu pembuangan racun tubuh.',
                'image' => 'blogs/blog-reflexology.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Rahasia Lulur Tradisional Rempah untuk Kulit Lembut dan Bercahaya',
                'desc' => 'Paduan kunyit, temu giring, dan beras ketan hitam merupakan warisan kecantikan alami keraton nusantara. Eksplorasi manfaat lulur alami dalam mencerahkan dan menutrisi kulit secara optimal.',
                'image' => 'blogs/blog-body-scrub.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        DB::table('blogs')->insert($blogs);

        // FAQs
        $faqs = [
            [
                'question' => 'Apakah saya harus melakukan reservasi terlebih dahulu sebelum datang?',
                'answer' => 'Ya, kami sangat menyarankan reservasi minimal 1 hari sebelumnya agar Anda mendapatkan jadwal terapis dan ruang perawatan privat sesuai keinginan.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Berapa menit sebelum jadwal perawatan saya harus tiba di lokasi?',
                'answer' => 'Disarankan untuk tiba 15 menit sebelum waktu reservasi untuk menikmati welcome drink herbal kami dan mengisi kuesioner preferensi perawatan.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Bagaimana jika saya memiliki kondisi kesehatan tertentu atau sedang hamil?',
                'answer' => 'Mohon beri tahu resepsionis dan terapis kami saat konsultasi sebelum perawatan, agar terapis kami dapat menyesuaikan teknik pemijatan serta minyak aromaterapi yang aman untuk kondisi Anda.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'question' => 'Apakah produk perawatan yang digunakan aman untuk kulit sensitif?',
                'answer' => 'Seluruh produk perawatan Larana Spa menggunakan bahan organik alami berkualitas tinggi tanpa paraben, serta telah teruji ramah untuk kulit sensitif.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        DB::table('faqs')->insert($faqs);

        // Privacy Policy
        $privacyPolicy = [
            'desc' => 'Kebijakan Privasi Larana Spa berkomitmen menjaga kerahasiaan seluruh data pribadi pelanggan, termasuk nama, nomor telepon, alamat email, dan informasi riwayat kesehatan yang diberikan saat reservasi. Kami tidak membagikan atau menjual data Anda kepada pihak ketiga mana pun tanpa persetujuan tertulis. Seluruh data hanya dipergunakan untuk keperluan konfirmasi reservasi, personalisasi layanan, dan peningkatan kualitas kenyamanan Anda di sanctuary kami.',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('privacy_policies')->insert($privacyPolicy);

        // Terms and Conditions
        $termsAndConditions = [
            'desc' => 'Syarat dan Ketentuan Layanan Larana Spa: 1. Pelanggan diharapkan hadir tepat waktu sesuai jadwal reservasi. Keterlambatan lebih dari 15 menit dapat mengurangi durasi perawatan demi menghormati jadwal pelanggan berikutnya. 2. Pembatalan atau penundaan jadwal reservasi harap dikonfirmasikan paling lambat 4 jam sebelum sesi dimulai. 3. Tamu wajib menjaga ketenangan di seluruh area spa demi kenyamanan bersama. 4. Larana Spa tidak bertanggung jawab atas kehilangan barang berharga pribadi yang tidak disimpan di loker penyimpanan aman yang telah disediakan.',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('terms_and_conditions')->insert($termsAndConditions);
    }
}
