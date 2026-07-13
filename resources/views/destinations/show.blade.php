@extends('layouts.app')

@section('title', $destination->name)

@section('styles')
<style>
    .detail-header {
        background: linear-gradient(135deg, #2c5f7f 0%, #3a7fa6 100%);
        color: white;
        padding: 40px 0;
        margin-bottom: 40px;
    }
    .destination-image-large {
        height: 400px;
        background: linear-gradient(135deg, #e8a537 0%, #c67f2a 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 5rem;
        border-radius: 8px;
        margin-bottom: 30px;
    }
    .info-box {
        background: #f8f9fa;
        padding: 20px;
        border-radius: 8px;
        margin: 20px 0;
        border-left: 4px solid #e8a537;
    }
</style>
@endsection

@section('content')
<!-- Detail Header -->
<div class="detail-header">
    <div class="container">
        <a href="{{ route('destinations.index') }}" class="btn btn-light btn-sm mb-3">← Kembali</a>
        <h1>{{ $destination->name }}</h1>
    </div>
</div>

<!-- Detail Content -->
<div class="container mb-5">
    <div class="row">
        <div class="col-md-8">
            <div class="destination-image-large">🏛️</div>
            <h3>Tentang Destinasi</h3>
            <p class="lead">{{ $destination->description }}</p>
            
            <div class="info-box">
                <h5>Lokasi</h5>
                <p>📍 {{ $destination->location }}</p>
            </div>

            <div class="mt-4">
                <a href="{{ route('destinations.index') }}" class="btn btn-primary">Lihat Destinasi Lainnya</a>
                <a href="{{ route('contact.index') }}" class="btn btn-secondary">Tanyakan ke Kami</a>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Informasi Penting</h5>
                </div>
                <div class="card-body">
                    <p><strong>Nama Destinasi:</strong><br>{{ $destination->name }}</p>
                    <p><strong>Lokasi:</strong><br>{{ $destination->location }}</p>
                    <p><strong>Jenis Wisata:</strong><br>Budaya & Sejarah</p>
                    <hr>
                    <p class="text-muted small">Untuk informasi lebih lanjut dan pemesanan paket wisata, hubungi kami melalui halaman kontak.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
