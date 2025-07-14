<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Beranda - Bank Jateng Syariah</title>
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
            background-image: url('{{ asset('images/bank1.jpg') }}');
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



            <!-- Section dengan background gambar -->
            <section style="position: relative; min-height: 100vh; background-image: url('{{ asset('images/bg1.jpg') }}'); background-size: cover; background-position: center;">
            
            <!-- Overlay gelap tipis (opsional) -->
            <div style="position: absolute; top:0; left:0; right:0; bottom:0; background-color: rgba(0,0,0,0.5); z-index: 1;"></div>

            <!-- Konten di atas gambar -->
            <div class="container text-white text-center d-flex align-items-center justify-content-center flex-column" style="position: relative; z-index: 2; height: 100vh;">
                <h1 class="display-4 fw-bold">Selamat Datang di Bank Jateng</h1>
                <p class="lead">Layanan terpercaya untuk masyarakat Jawa Tengah</p>
            </div>
            </section>




        <section class="py-5 bg-light" style="position: relative; z-index: 2;">
            <div class="container">
                <div class="row">
                    <!-- Kiri: Tab Berita dkk -->
                    <div class="col-md-8">
                        <div class="card shadow-sm rounded">
                            <!-- Nav Tabs -->
                            <ul class="nav nav-tabs px-3 pt-3 border-bottom-0" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active fw-semibold" id="berita-tab" data-bs-toggle="tab" data-bs-target="#berita" type="button">Berita</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link fw-semibold" id="nasabah-tab" data-bs-toggle="tab" data-bs-target="#nasabah" type="button">Informasi Nasabah</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link fw-semibold" id="pengumuman-tab" data-bs-toggle="tab" data-bs-target="#pengumuman" type="button">Pengumuman</button>
                                </li>
                            </ul>

                                <!-- Tab Content -->
                                <div class="tab-content p-3" id="myTabContent">
                                    <div class="tab-pane fade show active" id="berita" role="tabpanel">
                                        <p>Konten Berita: Bank Jateng meluncurkan layanan digital baru untuk mendukung inklusi keuangan.</p>
                                    </div>
                                    <div class="tab-pane fade" id="nasabah" role="tabpanel">
                                        <p>Konten Nasabah: Harap pastikan data Anda sudah diperbarui untuk kenyamanan transaksi.</p>
                                    </div>
                                    <div class="tab-pane fade" id="pengumuman" role="tabpanel">
                                        <p>Konten Pengumuman: Sistem akan diperbarui pada tanggal 1 Juli 2025 pukul 01.00 WIB.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Kanan: Dropdown bantuan -->
                    <div class="col-md-4 mt-4 mt-md-0">
                    <div class="card shadow-sm rounded p-3">
                        <h6 class="fw-semibold">Untuk Masyarakat, Ada yang bisa saya bantu</h6>
                    <select class="form-select mt-2" onchange="window.location.href = this.value;">
                    <option selected disabled>Pilih bantuan</option>
                    <option value="{{ route('jadwal') }}">Bantu Saya Melihat Jadwal Layanan</option>
                    <option value="{{ route('pinjaman') }}">Bantu Saya Ajukan Pinjaman</option>
                    <option value="{{ route('deposito') }}">Bantu Saya Buka Deposito</option>
                    </select>
                    </div>
                    </div>
                    </div>
                </div>
            </section>

 

<section class="container my-5">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="fw-bold text-primary">Promo Terbaru</h4>
    <a href="{{ url('/promo') }}" class="btn btn-outline-primary btn-sm d-flex align-items-center gap-1 fw-semibold rounded-pill shadow-sm" style="transition: 0.3s;">
      Lihat Semua Promo <i class="bi bi-arrow-right"></i>
    </a>
  </div>

  <div class="d-flex overflow-auto gap-3 pb-2">
    <!-- Promo Card -->
    <div class="card flex-shrink-0" style="width: 270px; border-radius: 16px;">
      <img src="{{ asset('images/promo1.jpg') }}" class="card-img-top" alt="Promo 1" style="border-top-left-radius: 16px; border-top-right-radius: 16px;">
      <div class="card-body">
        <small class="text-muted"><i class="bi bi-calendar-event"></i> 24 June 2025 | Promo</small>
        <h6 class="mt-2 fw-semibold">Pilih Saveduit untuk Langkah Pasti Lari di...</h6>
      </div>
    </div>

    <!-- Promo Card 2 -->
    <div class="card flex-shrink-0" style="width: 270px; border-radius: 16px;">
      <img src="{{ asset('images/promo2.jpg') }}" class="card-img-top" alt="Promo 2">
      <div class="card-body">
        <small class="text-muted"><i class="bi bi-calendar-event"></i> 18 June 2025 | Promo</small>
        <h6 class="mt-2 fw-semibold">Promo Bayar PBB Via Shopee</h6>
      </div>
    </div>

    <!-- Promo Card 3 -->
    <div class="card flex-shrink-0" style="width: 270px; border-radius: 16px;">
      <img src="{{ asset('images/promo3.jpg') }}" class="card-img-top" alt="Promo 3">
      <div class="card-body">
        <small class="text-muted"><i class="bi bi-calendar-event"></i> 18 June 2025 | Promo</small>
        <h6 class="mt-2 fw-semibold">Promo Paket Hemat Lengkap Telkomsel</h6>
      </div>
    </div>

    <!-- Promo Card 4 -->
    <div class="card flex-shrink-0" style="width: 270px; border-radius: 16px;">
      <img src="{{ asset('images/promo4.jpg') }}" class="card-img-top" alt="Promo 4">
      <div class="card-body">
        <small class="text-muted"><i class="bi bi-calendar-event"></i> 13 June 2025 | Promo</small>
        <h6 class="mt-2 fw-semibold">XtraRun 2025: Booking Slot Eksklusif</h6>
      </div>
    </div>

    <!-- Promo Card 5 -->
    <div class="card flex-shrink-0" style="width: 270px; border-radius: 16px;">
      <img src="{{ asset('images/promo4.jpg') }}" class="card-img-top" alt="Promo 5">
      <div class="card-body">
        <small class="text-muted"><i class="bi bi-calendar-event"></i> 23 June 2025 | Promo</small>
        <h6 class="mt-2 fw-semibold">Promo Haji</h6>
      </div>
    </div>

    <!-- Promo Card 6 -->
    <div class="card flex-shrink-0" style="width: 270px; border-radius: 16px;">
      <img src="{{ asset('images/promo1.jpg') }}" class="card-img-top" alt="Promo 6" style="border-top-left-radius: 16px; border-top-right-radius: 16px;">
      <div class="card-body">
        <small class="text-muted"><i class="bi bi-calendar-event"></i> 24 June 2025 | Promo</small>
        <h6 class="mt-2 fw-semibold">Pilih Saveduit untuk Langkah Pasti Lari di...</h6>
      </div>
    </div>

    <!-- Promo Card 7 -->
    <div class="card flex-shrink-0" style="width: 270px; border-radius: 16px;">
      <img src="{{ asset('images/promo2.jpg') }}" class="card-img-top" alt="Promo 7">
      <div class="card-body">
        <small class="text-muted"><i class="bi bi-calendar-event"></i> 18 June 2025 | Promo</small>
        <h6 class="mt-2 fw-semibold">Promo Bayar PBB Via Shopee</h6>
      </div>
    </div>

    <!-- Promo Card 8 -->
    <div class="card flex-shrink-0" style="width: 270px; border-radius: 16px;">
      <img src="{{ asset('images/promo3.jpg') }}" class="card-img-top" alt="Promo 8">
      <div class="card-body">
        <small class="text-muted"><i class="bi bi-calendar-event"></i> 18 June 2025 | Promo</small>
        <h6 class="mt-2 fw-semibold">Promo Paket Hemat Lengkap Telkomsel</h6>
      </div>
    </div>

    <!-- Promo Card 9 -->
    <div class="card flex-shrink-0" style="width: 270px; border-radius: 16px;">
      <img src="{{ asset('images/promo4.jpg') }}" class="card-img-top" alt="Promo 9">
      <div class="card-body">
        <small class="text-muted"><i class="bi bi-calendar-event"></i> 13 June 2025 | Promo</small>
        <h6 class="mt-2 fw-semibold">XtraRun 2025: Booking Slot Eksklusif</h6>
      </div>
    </div>

    <!-- Promo Card 10 -->
    <div class="card flex-shrink-0" style="width: 270px; border-radius: 16px;">
      <img src="{{ asset('images/promo4.jpg') }}" class="card-img-top" alt="Promo 10">
      <div class="card-body">
        <small class="text-muted"><i class="bi bi-calendar-event"></i> 23 June 2025 | Promo</small>
        <h6 class="mt-2 fw-semibold">Promo Kurban</h6>
      </div>
    </div>

  </div>
</section>

<div class="container my-5">
  <h4 class="text-center mb-4 fw-bold">Kenal Kami Lebih Jauh</h4>
  <div class="row justify-content-center">
    <div class="col-md-4 mb-3">
      <div class="border rounded shadow-sm p-4 text-center bg-white">
        <p class="mb-0"><b>Penjelasan singkat tentang bank</b></p>
        <p>Bank Jateng Syariah adalah unit usaha syariah dari Bank Jateng yang beroperasi berdasarkan prinsip-prinsip syariah. Bank ini menyediakan berbagai layanan keuangan syariah seperti simpanan, pembiayaan, dan layanan perbankan lainnya. Tujuannya adalah untuk mendukung pertumbuhan ekonomi syariah dan industri halal di Indonesia</p>
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <div class="border rounded shadow-sm p-4 text-center bg-white">
        <a href="https://www.youtube.com/@bank_jateng" target="_blank" class="text-decoration-none">
          Channel Youtube Bank Jateng
        </a>
      </div>
    </div>
  </div>
</div>






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
