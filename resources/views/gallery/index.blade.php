@extends('layouts.app')

@section('title', 'Galeri')

@section('styles')
<style>
    .page-header {
        background: linear-gradient(135deg, #2c5f7f 0%, #3a7fa6 100%);
        color: white;
        padding: 60px 0;
        margin-bottom: 40px;
    }
    .gallery-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 20px;
        margin-bottom: 40px;
    }
    .gallery-item {
        position: relative;
        overflow: hidden;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        transition: transform 0.3s;
    }
    .gallery-item:hover {
        transform: scale(1.05);
    }
    .gallery-image {
        height: 250px;
        background: linear-gradient(135deg, #e8a537 0%, #c67f2a 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 3rem;
        color: white;
    }
    .gallery-caption {
        padding: 15px;
        background: white;
    }
    .gallery-caption h6 {
        color: #2c5f7f;
        font-weight: bold;
        margin-bottom: 5px;
    }
</style>
@endsection

@section('content')
<!-- Page Header -->
<div class="page-header">
    <div class="container">
        <h1>Galeri Wisata</h1>
        <p>Koleksi foto destinasi dan paket wisata kami</p>
    </div>
</div>

<!-- Gallery Grid -->
<div class="container mb-5">
    <div class="gallery-grid">
        @forelse($destinations as $destination)
        <div class="gallery-item">
            <div class="gallery-image">🏛️</div>
            <div class="gallery-caption">
                <h6>{{ $destination->name }}</h6>
                <p class="text-muted small">{{ $destination->location }}</p>
            </div>
        </div>
        @empty
        @endforelse

        @forelse($tourPackages as $package)
        <div class="gallery-item">
            <div class="gallery-image">✈️</div>
            <div class="gallery-caption">
                <h6>{{ $package->title }}</h6>
                <p class="text-muted small">{{ $package->duration }}</p>
            </div>
        </div>
        @empty
        @endforelse
    </div>

    @if($destinations->isEmpty() && $tourPackages->isEmpty())
    <div class="alert alert-info text-center">
        Galeri masih kosong. Silakan kembali lagi nanti.
    </div>
    @endif
</div>

<!-- Info Section -->
<section class="py-5 bg-light">
    <div class="container text-center">
        <h3>Bagikan Pengalaman Anda</h3>
        <p class="lead">Jika Anda telah menggunakan layanan kami, kami akan senang mendengar pengalaman Anda.</p>
        <a href="{{ route('contact.index') }}" class="btn btn-primary">Hubungi Kami</a>
    </div>
</section>
@endsection
