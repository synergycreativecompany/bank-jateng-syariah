<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tentang Kami - Bank Jateng</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: #f4f6f9;
            font-family: 'Segoe UI', sans-serif;
        }
        .hero-section {
            background: linear-gradient(to right, #0077b6, #00b4d8);
            color: white;
            padding: 80px 0;
            text-align: center;
        }
        .hero-section h1 {
            font-size: 3rem;
            font-weight: 700;
        }
        .hero-section p {
            font-size: 1.25rem;
        }
        .section-content {
            padding: 60px 0;
        }
        .card-icon {
            font-size: 2rem;
            color: #0077b6;
        }
        .info-card {
            transition: all 0.3s ease;
            border: none;
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        }
        .info-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 6px 24px rgba(0, 0, 0, 0.12);
        }

        .nav-link.active,
        .nav-link:hover {
            border-bottom: 3px solid white;
            font-weight: 600;
        }

        .dropdown-menu {
            border-radius: 12px;
            padding: 0.75rem;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        .dropdown-item {
            padding: 12px 16px;
            transition: background 0.3s ease;
            border-radius: 10px;
        }

        .dropdown-item:hover {
            background-color: #f1f1f1;
        }

        .dropdown-item i {
            font-size: 1.2rem;
        }

        a.text-decoration-none:hover {
            text-decoration: none;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary px-4 sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center me-4" href="/">
                <img src="{{ asset('images/bankjateng.png') }}" alt="Logo" style="height: 45px;" class="me-2">
                <strong class="text-white">Bank Jateng</strong>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary px-4 shadow sticky-top">
        <a class="navbar-brand text-white fw-bold d-flex align-items-center" href="#">
            <img src="{{ asset('images/bankjateng.png') }}" alt="Logo" style="height: 45px;" class="me-2">
        
        </a>
        <div class="collapse navbar-collapse">
            <!-- Menu kiri -->
            <ul class="nav nav-tabs me-auto mb-2 mb-lg-0 ms-3">
                <li class="nav-item">
                <a class="nav-link text-white fw-semibold d-flex align-items-center gap-1" href="/">
                    <i class="bi bi-house-door-fill fs-5 text-light"></i>
                    <span>Home</span>
                </a>
                </li>

                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-black fw-semibold" href="/tentangkami" role="button" data-bs-toggle="dropdown">
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

                            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-black fw-semibold" href="/layananmasyarakat" role="button" data-bs-toggle="dropdown">
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


    <section class="hero-section">
        <div class="container">
            <h1>Tentang Kami</h1>
            <p>Informasi lengkap tentang profil dan struktur organisasi Bank Jateng</p>
        </div>
    </section>

    <section class="section-content">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <a href="/profil" class="text-decoration-none text-dark">
                        <div class="card info-card h-100">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <i class="bi bi-bank card-icon me-3"></i>
                                    <h5 class="card-title mb-0">Profil & Visi Misi</h5>
                                </div>
                                <p class="card-text">Informasi sejarah, visi, dan misi Bank Jateng.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="/tatakelola" class="text-decoration-none text-dark">
                        <div class="card info-card h-100">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <i class="bi bi-diagram-3 card-icon me-3"></i>
                                    <h5 class="card-title mb-0">Tata Kelola Perusahaan</h5>
                                </div>
                                <p class="card-text">Struktur organisasi dan kebijakan internal.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="/hubunganperusahaan" class="text-decoration-none text-dark">
                        <div class="card info-card h-100">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <i class="bi bi-people card-icon me-3"></i>
                                    <h5 class="card-title mb-0">Hubungan Perusahaan</h5>
                                </div>
                                <p class="card-text">Kemitraan, komunikasi, dan interaksi publik.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-dark text-white py-4 mt-5">
        <div class="container">
            <div class="row text-center text-md-start">
                <div class="col-md-6 mb-3">
                    <h5 class="fw-bold">Hubungi Kami</h5>
                    <p class="mb-1"><i class="bi bi-envelope"></i> info@bankjateng.co.id</p>
                    <p class="mb-1"><i class="bi bi-telephone"></i> (024) 123-456</p>
                    <p><i class="bi bi-geo-alt"></i> Jl. Pemuda No. 123, Semarang</p>
                </div>
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
</body>
</html>
