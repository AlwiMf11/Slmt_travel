@extends('layouts.app')

@section('title', 'Beranda')

@section('styles')
<style>
    .hero {
        background: linear-gradient(135deg, #2c5f7f 0%, #3a7fa6 100%);
        color: white;
        padding: 100px 0;
        text-align: center;
    }
    .hero h1 {
        font-size: 3rem;
        font-weight: bold;
        margin-bottom: 20px;
    }
    .hero p {
        font-size: 1.2rem;
        margin-bottom: 30px;
    }
    .card-destination, .card-package {
        border: none;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        transition: transform 0.3s;
    }
    .card-destination:hover, .card-package:hover {
        transform: translateY(-5px);
    }
    .section-title {
        color: #2c5f7f;
        font-weight: bold;
        text-align: center;
        margin: 60px 0 40px;
        font-size: 2rem;
    }
</style>
@endsection

@section('content')
<!-- Hero Section -->
<div class="hero">
    <div class="container">
        <h1>Selamat Datang di SlametTravel</h1>
        <p>Jelajahi keindahan Kudus dan Demak bersama kami</p>
        <a href="{{ route('destinations.index') }}" class="btn btn-secondary btn-lg">Mulai Petualangan</a>
    </div>
</div>

<!-- Featured Destinations -->
<section class="py-5">
    <div class="container">
        <h2 class="section-title">Destinasi Unggulan</h2>
        <div class="row g-4">
            @forelse($destinations as $destination)
            <div class="col-md-4">
                <div class="card card-destination h-100">
                    <div class="card-body">
                        <h5 class="card-title">{{ $destination->name }}</h5>
                        <p class="text-muted">📍 {{ $destination->location }}</p>
                        <p class="card-text">{{ substr($destination->description, 0, 100) }}...</p>
                        <a href="{{ route('destinations.show', $destination) }}" class="btn btn-primary btn-sm">Lihat Selengkapnya</a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12">
                <p class="text-center text-muted">Belum ada destinasi tersedia.</p>
            </div>
            @endforelse
        </div>
        <div class="text-center mt-4">
            <a href="{{ route('destinations.index') }}" class="btn btn-primary">Lihat Semua Destinasi</a>
        </div>
    </div>
</section>

<!-- Featured Packages -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="section-title">Paket Wisata Pilihan</h2>
        <div class="row g-4">
            @forelse($tourPackages as $package)
            <div class="col-md-4">
                <div class="card card-package h-100">
                    <div class="card-body">
                        <h5 class="card-title">{{ $package->title }}</h5>
                        <p class="text-muted">⏱️ {{ $package->duration }}</p>
                        <p class="h5 text-primary">Rp {{ number_format($package->price, 0, ',', '.') }}</p>
                        <p class="card-text">{{ substr($package->description, 0, 80) }}...</p>
                        <a href="{{ route('tour-packages.show', $package) }}" class="btn btn-primary btn-sm">Detail Paket</a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12">
                <p class="text-center text-muted">Belum ada paket wisata tersedia.</p>
            </div>
            @endforelse
        </div>
        <div class="text-center mt-4">
            <a href="{{ route('tour-packages.index') }}" class="btn btn-primary">Lihat Semua Paket</a>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-5" style="background: linear-gradient(135deg, #2c5f7f 0%, #3a7fa6 100%); color: white;">
    <div class="container text-center">
        <h2>Siap untuk Petualangan?</h2>
        <p class="lead mb-4">Hubungi kami sekarang untuk memesan paket wisata impian Anda</p>
        <a href="{{ route('contact.index') }}" class="btn btn-secondary btn-lg">Hubungi Kami</a>
    </div>
</section>
@endsection
