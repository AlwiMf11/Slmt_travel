@extends('layouts.app')

@section('title', 'Destinasi Wisata')

@section('styles')
<style>
    .page-header {
        background: linear-gradient(135deg, #2c5f7f 0%, #3a7fa6 100%);
        color: white;
        padding: 60px 0;
        margin-bottom: 40px;
    }
    .destination-card {
        border: none;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        transition: transform 0.3s, box-shadow 0.3s;
    }
    .destination-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 8px 12px rgba(0,0,0,0.15);
    }
    .destination-image {
        height: 250px;
        background: linear-gradient(135deg, #e8a537 0%, #c67f2a 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 3rem;
    }
    .destination-info {
        padding: 20px;
    }
    .destination-location {
        color: #e8a537;
        font-weight: 500;
        margin: 10px 0;
    }
</style>
@endsection

@section('content')
<!-- Page Header -->
<div class="page-header">
    <div class="container">
        <h1>Destinasi Wisata</h1>
        <p>Jelajahi keindahan Kudus dan Demak, dua kota bersejarah di Jawa Tengah</p>
    </div>
</div>

<!-- Destinations Grid -->
<div class="container mb-5">
    @forelse($destinations as $destination)
    <div class="row mb-4">
        <div class="col-md-8">
            <div class="destination-card h-100">
                <div class="destination-image">🏛️</div>
                <div class="destination-info">
                    <h3>{{ $destination->name }}</h3>
                    <p class="destination-location">📍 {{ $destination->location }}</p>
                    <p class="text-muted">{{ $destination->description }}</p>
                    <a href="{{ route('destinations.show', $destination) }}" class="btn btn-primary">Lihat Detail</a>
                </div>
            </div>
        </div>
    </div>
    @empty
    <div class="alert alert-info">
        Belum ada destinasi yang tersedia. Silakan kembali lagi nanti.
    </div>
    @endforelse
</div>
@endsection
