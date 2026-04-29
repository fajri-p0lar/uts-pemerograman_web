<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK Al Barokah</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    :root {
        --primary-color: #1a2a6c;
        --secondary-color: #ffc107;
    }

    body {
        font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
        background-color: #f4f7f6;
    }

    .navbar {
        padding: 10px 0;
        background-color: var(--primary-color) !important;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    /* Warna merah untuk menu aktif/hover sesuai referensi */
    .navbar-nav .nav-link:hover,
    .navbar-nav .nav-link.active {
        color: #ffc107 !important; /* Warna kuning agar kontras dengan biru tua */
    }

    .dropdown-menu {
        border: none;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    .section-title {
        position: relative;
        padding-bottom: 15px;
        margin-bottom: 30px;
        font-weight: 700;
    }
    
    .section-title::after {
        content: '';
        position: absolute;
        display: block;
        width: 60px;
        height: 3px;
        background: var(--secondary-color);
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
    }

    .hero-section {
        padding: 120px 0;
        background: linear-gradient(rgba(26, 42, 108, 0.8), rgba(26, 42, 108, 0.8)), 
                    url('https://via.placeholder.com/1200x600') center/cover;
    }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold d-flex align-items-center" href="/">
                <img src="<?php echo e(asset('img/logo-albarokah.jpg')); ?>" alt="Logo" style="height: 45px;" class="me-2">
                SMK AL BAROKAH
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item"><a class="nav-link px-3" href="/">Beranda</a></li>
                    
                    <li class="nav-item dropdown px-3">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Profile
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Sambutan</a></li>
                            <li><a class="dropdown-item" href="<?php echo e(url('/profil')); ?>">Visi & Misi</a></li>
                            <li><a class="dropdown-item" href="#">Guru</a></li>
                            <li><a class="dropdown-item" href="#">Ekskul</a></li>
                            <li><a class="dropdown-item" href="#">Fasilitas</a></li>
                        </ul>
                    </li>

                    <li class="nav-item"><a class="nav-link px-3" href="#">Jurusan</a></li>
                    <li class="nav-item"><a class="btn btn-warning ms-lg-3 fw-bold rounded-pill px-4" href="#">PPDB 2026</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <?php echo $__env->yieldContent('content'); ?>

    <footer class="bg-white pt-5 pb-3 border-top mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3 mb-4">
                    <div class="d-flex align-items-center mb-3">
                        <img src="<?php echo e(asset('img/logo-albarokah.jpg')); ?>" alt="Logo" style="width: 50px;" class="me-2">
                        <h5 class="fw-bold mb-0">SMK AL BAROKAH</h5>
                    </div>
                    <p class="text-dark fw-bold mb-1 small">SMK Al Barokah Cikembar</p>
                    <p class="text-muted small">Jl. Raya Cikembar, RT.01/RW.02, Cikembar, Kab. Sukabumi, Jawa Barat 43357</p>
                </div>

                <div class="col-md-2 mb-4 ms-auto">
                    <h6 class="fw-bold mb-3">Menu</h6>
                    <ul class="list-unstyled small">
                        <li class="mb-2"><a href="<?php echo e(url('/')); ?>" class="text-decoration-none text-danger fw-bold">Beranda</a></li>
                        <li class="mb-2"><a href="<?php echo e(url('/profil')); ?>" class="text-decoration-none text-dark">Profile</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none text-dark">Artikel</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none text-dark">Prestasi</a></li>
                    </ul>
                </div>

                <div class="col-md-3 mb-4">
                    <h6 class="fw-bold mb-3">Bantuan</h6>
                    <ul class="list-unstyled small text-dark">
                        <li class="mb-2"><a href="#" class="text-decoration-none text-dark">Tata Cara PPDB</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none text-dark">Persyaratan PPDB</a></li>
                        <li class="mb-2"><a href="#" class="text-decoration-none text-dark">Kontak Kami</a></li>
                    </ul>
                </div>

                <div class="col-md-3 mb-4">
                    <h6 class="fw-bold mb-3">Hubungi Kami</h6>
                    <ul class="list-unstyled small">
                        <li class="mb-2"><i class="fas fa-envelope text-danger me-2"></i> info@smkalbarokah.sch.id</li>
                        <li class="mb-2"><i class="fab fa-whatsapp text-success me-2"></i> 085612345678</li>
                        <li class="mb-2"><i class="fas fa-phone text-danger me-2"></i> (0266) 123456</li>
                    </ul>
                    
                    <h6 class="fw-bold mt-4 mb-3">Ikuti Kami</h6>
                    <div class="d-flex gap-2">
                        <a href="#" class="btn btn-primary btn-sm rounded"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="btn btn-danger btn-sm rounded"><i class="fab fa-youtube"></i></a>
                        <a href="#" class="btn btn-warning btn-sm text-white rounded" style="background: linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%); border:none;"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            
            <div class="border-top pt-3 mt-3 text-center">
                <p class="small fw-bold">SMK AL BAROKAH &copy; All rights reserved</p>
            </div>
        </div>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\smk-albarokah\resources\views/layouts/app.blade.php ENDPATH**/ ?>