@extends('layouts.app')

@section('title', 'Hubungi Kami')

@section('styles')
<style>
    .page-header {
        background: linear-gradient(135deg, #2c5f7f 0%, #3a7fa6 100%);
        color: white;
        padding: 60px 0;
        margin-bottom: 40px;
    }
    .contact-form {
        background: white;
        padding: 40px;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    }
    .form-group {
        margin-bottom: 20px;
    }
    .form-label {
        color: #2c5f7f;
        font-weight: 500;
        margin-bottom: 8px;
    }
    .form-control:focus {
        border-color: #e8a537;
        box-shadow: 0 0 0 0.2rem rgba(232, 165, 55, 0.25);
    }
    .contact-info {
        background: #f8f9fa;
        padding: 30px;
        border-radius: 8px;
        margin-bottom: 30px;
    }
    .info-item {
        margin-bottom: 20px;
    }
    .info-item h6 {
        color: #2c5f7f;
        font-weight: bold;
    }
    .alert-success {
        background-color: #d4edda;
        border-color: #c3e6cb;
        color: #155724;
    }
</style>
@endsection

@section('content')
<!-- Page Header -->
<div class="page-header">
    <div class="container">
        <h1>Hubungi Kami</h1>
        <p>Kami siap membantu merencanakan perjalanan wisata Anda</p>
    </div>
</div>

<!-- Contact Content -->
<div class="container mb-5">
    <div class="row">
        <div class="col-md-4">
            <div class="contact-info">
                <div class="info-item">
                    <h6>📍 Alamat</h6>
                    <p>Jl. Kudus No. 123<br>Kudus, Jawa Tengah 59300<br>Indonesia</p>
                </div>
                <div class="info-item">
                    <h6>📞 Telepon</h6>
                    <p>+62 291 4261 XXX<br>+62 8XX XXXX XXXX</p>
                </div>
                <div class="info-item">
                    <h6>✉️ Email</h6>
                    <p>info@slamettravel.com<br>support@slamettravel.com</p>
                </div>
                <div class="info-item">
                    <h6>🕐 Jam Operasional</h6>
                    <p>Senin - Jumat: 08:00 - 17:00<br>Sabtu: 09:00 - 14:00<br>Minggu: Tutup</p>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            @if($errors->any())
            <div class="alert alert-danger">
                <strong>Terjadi Kesalahan!</strong>
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            @endif

            <div class="contact-form">
                <h3 class="mb-4">Kirim Pesan</h3>
                <form action="{{ route('contact.store') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="name" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" 
                               id="name" name="name" placeholder="Masukkan nama Anda" value="{{ old('name') }}" required>
                        @error('name')<span class="invalid-feedback">{{ $message }}</span>@enderror
                    </div>

                    <div class="form-group">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" 
                               id="email" name="email" placeholder="Masukkan email Anda" value="{{ old('email') }}" required>
                        @error('email')<span class="invalid-feedback">{{ $message }}</span>@enderror
                    </div>

                    <div class="form-group">
                        <label for="subject" class="form-label">Subjek</label>
                        <input type="text" class="form-control @error('subject') is-invalid @enderror" 
                               id="subject" name="subject" placeholder="Masukkan subjek pesan" value="{{ old('subject') }}" required>
                        @error('subject')<span class="invalid-feedback">{{ $message }}</span>@enderror
                    </div>

                    <div class="form-group">
                        <label for="message" class="form-label">Pesan</label>
                        <textarea class="form-control @error('message') is-invalid @enderror" 
                                  id="message" name="message" rows="5" 
                                  placeholder="Tuliskan pesan Anda di sini" required>{{ old('message') }}</textarea>
                        @error('message')<span class="invalid-feedback">{{ $message }}</span>@enderror
                    </div>

                    <button type="submit" class="btn btn-primary btn-lg w-100">Kirim Pesan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
