@extends('layouts.app')

@section('title', $tourPackage->title)

@section('styles')
<style>
    .detail-header {
        background: linear-gradient(135deg, #2c5f7f 0%, #3a7fa6 100%);
        color: white;
        padding: 40px 0;
        margin-bottom: 40px;
    }
    .package-image-large {
        height: 400px;
        background: linear-gradient(135deg, #e8a537 0%, #c67f2a 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 5rem;
        border-radius: 8px;
        margin-bottom: 30px;
    }
    .pricing-card {
        background: #f8f9fa;
        padding: 30px;
        border-radius: 8px;
        text-align: center;
        border-top: 4px solid #e8a537;
    }
    .pricing-card .price {
        font-size: 2.5rem;
        color: #2c5f7f;
        font-weight: bold;
        margin: 20px 0;
    }
    .detail-item {
        padding: 15px 0;
        border-bottom: 1px solid #eee;
    }
    .detail-item:last-child {
        border-bottom: none;
    }
</style>
@endsection

@section('content')
<!-- Detail Header -->
<div class="detail-header">
    <div class="container">
        <a href="{{ route('tour-packages.index') }}" class="btn btn-light btn-sm mb-3">← Kembali</a>
        <h1>{{ $tourPackage->title }}</h1>
    </div>
</div>

<!-- Detail Content -->
<div class="container mb-5">
    <div class="row">
        <div class="col-md-8">
            <div class="package-image-large">✈️</div>
            <h3>Deskripsi Paket</h3>
            <p class="lead">{{ $tourPackage->description }}</p>

            <h4 class="mt-5">Detail Paket Wisata</h4>
            <div class="detail-item">
                <strong>Nama Paket:</strong>
                <p>{{ $tourPackage->title }}</p>
            </div>
            <div class="detail-item">
                <strong>Durasi Wisata:</strong>
                <p>{{ $tourPackage->duration }}</p>
            </div>
            <div class="detail-item">
                <strong>Harga Per Orang:</strong>
                <p class="h5 text-primary">Rp {{ number_format($tourPackage->price, 0, ',', '.') }}</p>
            </div>

            <div class="mt-4">
                <a href="{{ route('contact.index') }}" class="btn btn-secondary btn-lg">Pesan Sekarang</a>
                <a href="{{ route('tour-packages.index') }}" class="btn btn-primary btn-lg ms-2">Lihat Paket Lain</a>
            </div>
        </div>

        <div class="col-md-4">
            <div class="pricing-card">
                <h5>Harga Paket</h5>
                <div class="price">Rp {{ number_format($tourPackage->price, 0, ',', '.') }}</div>
                <p class="text-muted">Per Orang</p>
                <hr>
                <p><strong>Durasi:</strong> {{ $tourPackage->duration }}</p>
                <a href="{{ route('contact.index') }}" class="btn btn-primary w-100 mt-3">Hubungi Kami</a>
            </div>

            <div class="card mt-4">
                <div class="card-body">
                    <h6>Keuntungan Paket</h6>
                    <ul class="list-unstyled">
                        <li>✓ Panduan wisata profesional</li>
                        <li>✓ Transportasi lengkap</li>
                        <li>✓ Kunjungan ke destinasi utama</li>
                        <li>✓ Pengalaman autentik</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
