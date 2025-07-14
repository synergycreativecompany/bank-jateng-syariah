<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Layanan Deposito - Bank Jateng Syariah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


    <style>
        .navbar-custom {
            background-color: #00aaff;
        }
        .navbar-brand img {
            height: 40px;
        }
        .tab-box, .dropdown-box {
            background-color: white;
            padding: 20px;
            box-shadow: 0 0 8px rgba(0,0,0,0.1);
            margin-top: 30px;
        }
    
        .nav-link,
        .dropdown-item {
            transition: all 0.3s ease;
        }

        .nav-link:hover {
            color:rgb(255, 255, 255) !important; 
            transform: translateY(-1px);
        }

        .dropdown-item:hover {
            background-color: #f8f9fa;
            transform: translateX(3px);
        }
        .navbar-brand img {
            transition: transform 0.3s ease;
        }

        .navbar-brand img:hover {
            transform: scale(1.05) rotate(-8deg);
        }
        body {
            background-image: url('{{ asset('images/bank.jpg') }}');
            background-position: top;
            background-repeat: no-repeat;
            background-size: cover; 
        }
        
        .nav-item.dropdown:hover .dropdown-menu {
            display: block;
            margin-top: 0; 
        }

        .dropdown-menu {
            transition: all 0.5s ease;
        }

        .card:hover {
            transform: translateY(6px);
            transition: all 0.345s ease-in-out;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary px-3 shadow sticky-top">
    <div class="container-fluid">
        <!-- Brand -->
        <a class="navbar-brand text-white fw-bold d-flex align-items-center" href="/">
            <img src="{{ asset('images/image.png') }}" alt="Logo" style="height: 45px;" class="me-2">
        </a>

        <!-- Hamburger -->                  
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar"
            aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu -->
        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 mt-3 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-white fw-semibold d-flex align-items-center gap-1" href="/">
                        <i class="bi bi-house-door-fill fs-5 text-light" style="line-height: 1;"></i>
                        <span class="d-inline-block">Home</span>
                    </a>
                </li>

                <!-- Tentang Kami -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white fw-semibold" href="#" role="button" data-bs-toggle="dropdown">
                        <i class="bi bi-info-circle me-1"></i> Tentang Kami
                    </a>
                    <ul class="dropdown-menu p-2 shadow-lg border-0 rounded-3">
                        <li>
                            <a class="dropdown-item d-flex align-items-start gap-2 py-2" href="/profil">
                                <i class="bi bi-bank fs-5 text-primary"></i>
                                <div>
                                    <div class="fw-semibold">Profil & Visi Misi</div>
                                    <small class="text-muted">Informasi sejarah, visi, dan misi Bank Jateng</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-start gap-2 py-2" href="/tatakelola">
                                <i class="bi bi-diagram-3 fs-5 text-success"></i>
                                <div>
                                    <div class="fw-semibold">Tata Kelola Perusahaan</div>
                                    <small class="text-muted">Struktur organisasi & kebijakan internal</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-start gap-2 py-2" href="/hubunganperusahaan">
                                <i class="bi bi-people fs-5 text-warning"></i>
                                <div>
                                    <div class="fw-semibold">Hubungan Perusahaan</div>
                                    <small class="text-muted">Kemitraan, komunikasi, dan interaksi publik</small>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>

            


                <!-- Layanan -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white fw-semibold" href="#" role="button" data-bs-toggle="dropdown">
                        <i class="bi bi-briefcase me-1"></i> Layanan Masyarakat
                    </a>
                    <ul class="dropdown-menu p-2 shadow-lg border-0 rounded-3">
                        <li>
                            <a class="dropdown-item d-flex align-items-start gap-2 py-2" href="/pinjaman">
                                <i class="bi bi-cash-coin fs-5 text-primary"></i>
                                <div>
                                    <div class="fw-semibold">Pengajuan Pinjaman</div>
                                    <small class="text-muted">Ajukan pinjaman dengan proses cepat</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-start gap-2 py-2" href="/deposito">
                                <i class="bi bi-piggy-bank fs-5 text-success"></i>
                                <div>
                                    <div class="fw-semibold">Pembukaan Deposito</div>
                                    <small class="text-muted">Investasi mudah & menguntungkan</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-start gap-2 py-2" href="/jadwal">
                                <i class="bi bi-calendar-check fs-5 text-danger"></i>
                                <div>
                                    <div class="fw-semibold">Jadwal Layanan</div>
                                    <small class="text-muted">Lihat jam operasional terbaru</small>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>

                    </ul>
                </li>
            </ul>

            <!-- Right content (search + login) -->
            <div class="d-lg-flex align-items-center gap-2">
                <form action="{{ route('search.redirect') }}" method="GET" class="d-flex my-2 my-lg-0" role="search">
                    <input type="text" name="q" class="form-control me-2" placeholder="Cari bantuan..." style="max-width: 180px;">
                    <button type="submit" class="btn btn-light">Search</button>
                </form>

                @guest
                    <a href="/register" class="btn btn-warning fw-semibold ms-lg-2 mt-2 mt-lg-0">Sign Up</a>
                @else
                    <a href="{{ url('/dashboard') }}" class="ms-lg-2 mt-2 mt-lg-0">
                        <img 
                            src="{{ asset('images/profil.png') }}" 
                            alt="Foto Profil" 
                            class="rounded-circle shadow"
                            style="width: 45px; height: 45px; object-fit: cover;">
                    </a>
                @endguest
            </div>
        </div>
    </div>
</nav>


    <div class="container py-5">
    <h2 class="fw-bold mb-4 text-primary">Pembukaan Deposito</h2>
      <div class="row g-4">
    <div class="col-md-6">
      <div class="card shadow-sm h-100">
        <div class="card-body">
          <h5 class="fw-bold">Fitur Deposito</h5>
          <ul class="mb-0">
            <li>Jangka waktu mulai dari 1 hingga 12 bulan</li>
            <li>Bunga menarik dan kompetitif</li>
            <li>Keamanan dana dijamin</li>
            <li>Bisa dipantau melalui dashboard nasabah</li>
          </ul>
        </div>
      </div>
    </div> 
    @guest
      <div class="alert alert-info d-inline-block px-4 py-3 shadow-sm">
        <i class="bi bi-info-circle"></i> Untuk mengajukan pinjaman, silakan
        <a href="{{ url('/register') }}" class="fw-bold">Sign Up</a> atau
        <a href="{{ url('/login') }}" class="fw-bold">Login</a>.
      </div>
    @else
      <a href="{{ url('/form-deposito') }}" class="btn btn-lg btn-primary shadow">
        <i class="bi bi-send"></i> Ajukan Deposito Sekarang
      </a>
    @endguest



<!-- Footer -->
<footer class="bg-dark text-white py-4 mt-5">
    <div class="container">
        <div class="row text-center text-md-start">
            <!-- Info Kontak -->
            <div class="col-md-6 mb-3">
                <h5 class="fw-bold">Hubungi Kami</h5>
                <p class="mb-1"><i class="bi bi-envelope"></i> bankjatengsyariah@gmail.com</p>
                <p class="mb-1"><i class="bi bi-telephone"></i> (0291) 4257100</p>
                <p><i class="bi bi-geo-alt"></i> Jl. Pemuda No. 123, Semarang</p>
            </div>
            <!-- Sosial Media -->
            <div class="col-md-6 mb-3">
                <h5 class="fw-bold">Ikuti Kami</h5>
                <a href="#" class="text-white me-3"><i class="bi bi-facebook fs-4"></i></a>
                <a href="#" class="text-white me-3"><i class="bi bi-instagram fs-4"></i></a>
                <a href="#" class="text-white me-3"><i class="bi bi-youtube fs-4"></i></a>
                <a href="#" class="text-white"><i class="bi bi-twitter fs-4"></i></a>
            </div>
        </div>

        <hr class="border-light">
        <p class="text-center mb-0">&copy; {{ date('Y') }} Bank Jateng. All Rights Reserved.</p>
    </div>
</footer>

    </div>
</body>
</html>
