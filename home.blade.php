<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home - Ayuni Gita Lestari</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

<style>
  .hero-section {
    background: linear-gradient(rgba(240, 102, 219, 0.5), rgba(166, 97, 175, 0.5)), url("img/pink-pastel.jpg") center/cover no-repeat;
    color: white;
    padding: 120px 20px;
    text-align: center;
  }
  .feature-card {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
  }
  .feature-card:hover {
    transform: translateY(-8px);
  }
</style>
</head>
<body>
  <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.html">Ayuniagl</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="/home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/berita">Berita</a></li>
                    <li class="nav-link"><a class="nav-link" href="/profile">Profil</a></li>
                    <li class="nav-link"><a class="nav-link" href="/kontak">Kontak</a></li>
                </ul> 
            </div>
        </div>
     </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h1 class="display-4 fw-bold">Selamat Datang di Website <br>Ayuni Gita Lestari</h1>
            <p class="lead">Temukan informasi terbaru, profil singkat, dan cara menghubungi saya.</p>
            <a href="/berita" class="btn btn-primary btn-lg mt-3">Lihat Berita</a>
        </div>
    </section>

    <!-- Profil Preview -->
    <section id="profil" class="bg-light py-5">
        <div class="container text-center">
            <h2 class="mb-4">Profil Singkat</h2>
            <img src="{{asset('img/ayuni gita.jpg')}}" width=190px class="rounded-circle mb-3" alt="profil">
            <p class="lead">Saya<strong>Ayuni Gita Lestari</strong>, Seorang mahasiswa dari Universitas Muhammadiyah Semarang dengan Program Studi S1 Teknologi Informasi yang tertarik dengan dunia teknologi, desain web, dan pengembangan aplikasi. Klik untuk mengetahui lebih lanjut tentang saya.</p>
            <a href="/profile" class="btn btn-outline-dark">Baca Profil Lengkap</a>
        </div>
    </section>

    <!-- Kontak Preview -->
    <section id="kontak" class="py-5">
        <h2 class="text-center mb-4">Hubungi Saya</h2>
        <div class="row justify-content-center">
            <div class="col-md-6 text-center">
                <p>Silakan hubungi saya melalui form kontak di bawah:</p>
                <a href="/kontak" class="btn btn-primary"><i class="fa-solid fa-envelope"></i>Form Kontak</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center p-4 mt-5">
        <p>&copy; 2025 Ayuni Gita Lestari | Dibuat dengan <i class="fa-solid fa-heart text-danger></i></p>
    </footer>

       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>               
</body>
</html>
