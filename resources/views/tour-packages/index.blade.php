@extends('layouts.app')

@section('title', 'Paket Wisata')

@section('styles')
<style>
    .page-header {
        background: linear-gradient(135deg, #2c5f7f 0%, #3a7fa6 100%);
        color: white;
        padding: 60px 0;
        margin-bottom: 40px;
    }
    .package-card {
        border: none;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        transition: transform 0.3s;
    }
    .package-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 8px 12px rgba(0,0,0,0.15);
    }
    .package-image {
        height: 200px;
        background: linear-gradient(135deg, #e8a537 0%, #c67f2a 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2.5rem;
    }
    .price-badge {
        position: absolute;
        top: 10px;
        right: 10px;
        background: #e8a537;
        color: white;
        padding: 8px 15px;
        border-radius: 20px;
        font-weight: bold;
    }
    .package-info {
        padding: 20px;
        position: relative;
    }
</style>
@endsection

@section('content')
<!-- Page Header -->
<div class="page-header">
    <div class="container">
        <h1>Paket Wisata</h1>
        <p>Pilih paket wisata terbaik sesuai kebutuhan dan budget Anda</p>
    </div>
</div>

<!-- Packages Grid -->
<div class="container mb-5">
    <div class="row g-4">
        @forelse($tourPackages as $package)
        <div class="col-md-6 col-lg-4">
            <div class="package-card h-100">
                <div class="package-image">✈️</div>
                <div class="package-info">
                    <div class="price-badge">Rp {{ number_format($package->price, 0, ',', '.') }}</div>
                    <h5>{{ $package->title }}</h5>
                    <p class="text-muted"><strong>⏱️ Durasi:</strong> {{ $package->duration }}</p>
                    <p class="text-muted">{{ substr($package->description, 0, 100) }}...</p>
                    <a href="{{ route('tour-packages.show', $package) }}" class="btn btn-primary btn-sm w-100">Lihat Detail</a>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12">
            <div class="alert alert-info">
                Belum ada paket wisata yang tersedia. Silakan kembali lagi nanti.
            </div>
        </div>
        @endforelse
    </div>
</div>
@endsection
