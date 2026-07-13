<?php

namespace Database\Seeders;

use App\Models\TourPackage;
use Illuminate\Database\Seeder;

class TourPackageSeeder extends Seeder
{
    public function run()
    {
        TourPackage::create([
            'title' => 'Kudus Heritage Tour',
            'price' => 450000,
            'duration' => '1 Hari',
            'description' => 'Paket wisata sehari penuh menjelajahi warisan budaya Kudus. Kunjungi Menara Kudus, Masjid Menara Kudus, Museum Kretek, dan nikmati makanan tradisional lokal. Termasuk guide profesional dan transportasi.',
            'image' => 'kudus-heritage-tour.jpg'
        ]);

        TourPackage::create([
            'title' => 'Demak Religious Tour',
            'price' => 500000,
            'duration' => '1 Hari',
            'description' => 'Kunjungan ziarah ke situs-situs religi bersejarah Demak. Ziarah ke Masjid Agung Demak, Makam Sunan Kalijaga, dan tempat-tempat bersejarah lainnya. Dipandu oleh guide yang berpengalaman dalam sejarah Islam Jawa.',
            'image' => 'demak-religious-tour.jpg'
        ]);

        TourPackage::create([
            'title' => 'Kudus Culinary Trip',
            'price' => 350000,
            'duration' => '1/2 Hari',
            'description' => 'Petualangan kuliner mencicipi cita rasa autentik Kudus. Dari soto Kudus, nasi kuning, hingga kretek khas. Termasuk kunjungan ke Colo untuk melihat proses pembuatan kretek tradisional.',
            'image' => 'kudus-culinary.jpg'
        ]);

        TourPackage::create([
            'title' => 'Central Java Cultural Tour',
            'price' => 1200000,
            'duration' => '3 Hari 2 Malam',
            'description' => 'Paket wisata komprehensif mengeksplorasi budaya Jawa Tengah. Mencakup Kudus, Demak, dan sekitarnya dengan akomodasi bintang 3, all meals, dan panduan wisata berpengalaman.',
            'image' => 'central-java-cultural.jpg'
        ]);

        TourPackage::create([
            'title' => 'Weekend Trip Kudus-Demak',
            'price' => 850000,
            'duration' => '2 Hari 1 Malam',
            'description' => 'Getaway akhir pekan sempurna mengunjungi Kudus dan Demak. Kunjungan ke destinasi utama, menginap di hotel nyaman, sarapan pagi, dan transportasi lengkap sudah termasuk.',
            'image' => 'weekend-trip.jpg'
        ]);
    }
}
