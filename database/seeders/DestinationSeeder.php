<?php

namespace Database\Seeders;

use App\Models\Destination;
use Illuminate\Database\Seeder;

class DestinationSeeder extends Seeder
{
    public function run()
    {
        Destination::create([
            'name' => 'Menara Kudus',
            'location' => 'Kudus, Jawa Tengah',
            'description' => 'Menara Kudus adalah bangunan bersejarah berusia lebih dari 500 tahun yang menjadi simbol kota Kudus. Menara ini dibangun oleh Sunan Kudus sebagai bagian dari kompleks masjid dengan arsitektur unik yang memadukan gaya Hindu dan Islam.',
            'image' => 'menara-kudus.jpg'
        ]);

        Destination::create([
            'name' => 'Masjid Agung Demak',
            'location' => 'Demak, Jawa Tengah',
            'description' => 'Masjid Agung Demak adalah salah satu masjid tertua di Indonesia yang dibangun pada tahun 1479. Masjid ini merupakan pusat penyebaran Islam di Jawa dan memiliki arsitektur Jawa yang elegan dengan kolom-kolom kayu berkualitas tinggi.',
            'image' => 'masjid-agung-demak.jpg'
        ]);

        Destination::create([
            'name' => 'Museum Kretek Kudus',
            'location' => 'Kudus, Jawa Tengah',
            'description' => 'Museum yang menampilkan sejarah dan perkembangan rokok kretek Kudus. Pengunjung dapat belajar tentang proses produksi kretek tradisional dan melihat koleksi barang-barang bersejarah terkait industri kretek.',
            'image' => 'museum-kretek.jpg'
        ]);

        Destination::create([
            'name' => 'Colo Kudus',
            'location' => 'Kudus, Jawa Tengah',
            'description' => 'Desa Colo adalah kampung penghasil kretek terbaik di Kudus. Di sini pengunjung dapat melihat proses pembuatan kretek secara langsung dan berinteraksi dengan pengrajin lokal yang telah berpengalaman puluhan tahun.',
            'image' => 'colo-kudus.jpg'
        ]);

        Destination::create([
            'name' => 'Pantai Morosari Demak',
            'location' => 'Demak, Jawa Tengah',
            'description' => 'Pantai Morosari menawarkan pemandangan indah dengan aktivitas nelayan tradisional. Pengunjung dapat menikmati sunset yang spektakuler dan mencoba hasil tangkapan laut segar di restoran-restoran tepi pantai.',
            'image' => 'pantai-morosari.jpg'
        ]);

        Destination::create([
            'name' => 'Makam Sunan Kudus',
            'location' => 'Kudus, Jawa Tengah',
            'description' => 'Makam Sunan Kudus adalah tempat peristirahatan akhir tokoh penyebar Islam terkemuka di Jawa. Kompleks makam ini dikelilingi bangunan bersejarah dan sering dikunjungi para peziarah dari berbagai daerah.',
            'image' => 'makam-sunan-kudus.jpg'
        ]);
    }
}
