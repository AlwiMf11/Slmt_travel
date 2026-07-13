<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - SlametTravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --primary: #2c5f7f;
            --secondary: #e8a537;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .navbar {
            background-color: var(--primary) !important;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .navbar-brand {
            font-weight: bold;
            font-size: 1.5rem;
            color: var(--secondary) !important;
        }
        .nav-link {
            color: white !important;
            margin: 0 10px;
            transition: color 0.3s;
        }
        .nav-link:hover {
            color: var(--secondary) !important;
        }
        .footer {
            background-color: var(--primary);
            color: white;
            margin-top: 60px;
            padding: 40px 0;
        }
        .btn-primary {
            background-color: var(--primary) !important;
            border-color: var(--primary) !important;
        }
        .btn-primary:hover {
            background-color: var(--secondary) !important;
            border-color: var(--secondary) !important;
        }
        .btn-secondary {
            background-color: var(--secondary) !important;
            border-color: var(--secondary) !important;
            color: var(--primary) !important;
        }
    </style>
    @yield('styles')
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">SlametTravel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('destinations.index') }}">Destinasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('tour-packages.index') }}">Paket Wisata</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('gallery.index') }}">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact.index') }}">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <h5>SlametTravel</h5>
                    <p>Jelajahi keindahan Kudus dan Demak bersama SlametTravel. Pengalaman wisata tak terlupakan menanti Anda.</p>
                </div>
                <div class="col-md-4 mb-4">
                    <h5>Menu</h5>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('destinations.index') }}" class="text-white-50 text-decoration-none">Destinasi</a></li>
                        <li><a href="{{ route('tour-packages.index') }}" class="text-white-50 text-decoration-none">Paket Wisata</a></li>
                        <li><a href="{{ route('gallery.index') }}" class="text-white-50 text-decoration-none">Galeri</a></li>
                        <li><a href="{{ route('contact.index') }}" class="text-white-50 text-decoration-none">Hubungi Kami</a></li>
                    </ul>
                </div>
                <div class="col-md-4 mb-4">
                    <h5>Hubungi Kami</h5>
                    <p>Email: info@slamettravel.com<br>Telepon: +62 291 4261 XXX<br>Alamat: Kudus, Jawa Tengah</p>
                </div>
            </div>
            <hr class="bg-white-50">
            <div class="text-center text-white-50">
                <p>&copy; 2024 SlametTravel. Semua hak dilindungi.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @yield('scripts')
</body>
</html>
