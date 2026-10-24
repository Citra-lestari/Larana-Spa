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
        // 1. Specialists
        $specialists = [
            ['name' => 'Senior Massage Therapist', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Aromatherapy Specialist', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Reflexology Expert', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Body Scrub & Facialist', 'created_at' => now(), 'updated_at' => now()],
        ];
        DB::table('specialists')->insert($specialists);

        // 2. Categories
        $categories = [
            [
                'name' => 'Massage Therapy',
                'image' => 'asset/Massage Therapy.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Facial and Skin Care',
                'image' => 'asset/Facial & Skin Care.png',
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
                'image' => 'asset/Foot & Hand Care.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        DB::table('categories')->insert($categories);

        // 3. Treatments
        $treatments = [
            [
                'category_id' => 1,
                'name' => 'Traditional Balinese Massage',
                'desc' => 'Pijat tradisional khas Bali yang mengombinasikan teknik peregangan, acupressure, dan minyak aromaterapi murni untuk melancarkan sirkulasi energi dan meredakan ketegangan otot.',
                'price' => 'Rp 275.000',
                'duration' => '2026-10-22',
                'before_treatment' => 'Konsultasi kondisi kesehatan dan ritual cuci kaki dengan garam laut aromatik.',
                'health_treatment' => 'Meredakan pegal linu, melancarkan aliran darah, dan mengurangi stres fisik.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 1,
                'name' => 'Warm Stone Relaxing Massage',
                'desc' => 'Terapi menggunakan batu vulkanik hangat pilihan yang diletakkan pada titik-titik cakra tubuh untuk menyalurkan energi relaksasi hangat yang mendalam.',
                'price' => 'Rp 350.000',
                'duration' => '2026-10-22',
                'before_treatment' => 'Pemeriksaan sensitivitas suhu kulit dan relaksasi pernapasan herbal.',
                'health_treatment' => 'Menenangkan sistem saraf pusat, meredakan insomnia, dan mempercepat pemulihan otot.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 2,
                'name' => 'Organic Botanical Glow Facial',
                'desc' => 'Perawatan wajah alami menggunakan ekstrak mawar, lidah buaya organik, dan vitamin serum untuk mencerahkan kulit serta mengembalikan elastisitas alami.',
                'price' => 'Rp 300.000',
                'duration' => '2026-10-22',
                'before_treatment' => 'Analisis jenis kulit wajah dan pembersihan mendalam (double cleansing).',
                'health_treatment' => 'Menghidrasi kulit kering, mengangkat sel kulit mati, dan memberi kilau sehat alami.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 3,
                'name' => 'Deep Foot Reflexology Therapy',
                'desc' => 'Stimulasi titik refleksi pada telapak kaki yang terhubung dengan organ vital tubuh untuk meningkatkan vitalitas dan memulihkan stamina.',
                'price' => 'Rp 180.000',
                'duration' => '2026-10-22',
                'before_treatment' => 'Rendam kaki herbal hangat dengan irisan lemon dan minyak sereh wangi.',
                'health_treatment' => 'Menstimulasi fungsi metabolisme, meredakan kaki lelah, dan memperlancar detoksifikasi tubuh.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        DB::table('treatments')->insert($treatments);

        // 4. Packages
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

        // 5. Terapists
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

        // 6. Blogs
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

        // 7. FAQs
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

        // 8. Privacy Policy
        $privacyPolicy = [
            'desc' => 'Kebijakan Privasi Larana Spa berkomitmen menjaga kerahasiaan seluruh data pribadi pelanggan, termasuk nama, nomor telepon, alamat email, dan informasi riwayat kesehatan yang diberikan saat reservasi. Kami tidak membagikan atau menjual data Anda kepada pihak ketiga mana pun tanpa persetujuan tertulis. Seluruh data hanya dipergunakan untuk keperluan konfirmasi reservasi, personalisasi layanan, dan peningkatan kualitas kenyamanan Anda di sanctuary kami.',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('privacy_policies')->insert($privacyPolicy);

        // 9. Terms and Conditions
        $termsAndConditions = [
            'desc' => 'Syarat dan Ketentuan Layanan Larana Spa: 1. Pelanggan diharapkan hadir tepat waktu sesuai jadwal reservasi. Keterlambatan lebih dari 15 menit dapat mengurangi durasi perawatan demi menghormati jadwal pelanggan berikutnya. 2. Pembatalan atau penundaan jadwal reservasi harap dikonfirmasikan paling lambat 4 jam sebelum sesi dimulai. 3. Tamu wajib menjaga ketenangan di seluruh area spa demi kenyamanan bersama. 4. Larana Spa tidak bertanggung jawab atas kehilangan barang berharga pribadi yang tidak disimpan di loker penyimpanan aman yang telah disediakan.',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('terms_and_conditions')->insert($termsAndConditions);
    }
}
