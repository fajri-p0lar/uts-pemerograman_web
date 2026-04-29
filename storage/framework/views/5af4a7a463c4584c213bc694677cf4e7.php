<?php $__env->startSection('content'); ?>
<style>
    /* 1. Hero Section Biru Muda */
    .hero-custom {
        background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
        min-height: 400px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: white;
    }
    .hero-text h1 { font-size: 3.5rem; font-weight: 800; }
    .hero-text p { font-size: 1.2rem; opacity: 0.9; }

    /* 2. Icon Bar Melayang */
    .icon-bar-wrapper { margin-top: -50px; position: relative; z-index: 10; }
    .icon-card {
        background: white;
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        padding: 30px;
        display: flex;
        justify-content: space-around;
    }
    .icon-box { text-align: center; color: #4facfe; text-decoration: none; transition: 0.3s; }
    .icon-box:hover { transform: translateY(-5px); color: #0083b0; }
    .icon-box i { font-size: 2.5rem; margin-bottom: 10px; display: block; }
    .icon-box span { font-weight: 600; color: #333; }

    /* 3. Section Styling */
    .section-padding { padding: 80px 0; }
    .section-bg-light { background-color: #f8fbff; }
    .section-title-wrapper { display: flex; justify-content: space-between; align-items: center; margin-bottom: 40px; }
    .section-title { font-weight: 700; color: #333; position: relative; }
    .section-title::after { content: ''; display: block; width: 50px; height: 3px; background: #4facfe; margin-top: 10px; }

    /* 4. Card Styling (Berita & Prestasi) */
    .custom-card { border: none; border-radius: 15px; overflow: hidden; transition: 0.3s; box-shadow: 0 5px 15px rgba(0,0,0,0.05); }
    .custom-card:hover { transform: translateY(-10px); box-shadow: 0 15px 30px rgba(0,0,0,0.1); }
    .card-category { position: absolute; top: 15px; left: 15px; background: rgba(79, 172, 254, 0.9); color: white; padding: 5px 15px; border-radius: 20px; font-size: 0.8rem; }
    
    /* 5. Guru & Ekskul Grid */
    .circle-img { width: 120px; height: 120px; border-radius: 50%; object-fit: cover; border: 4px solid #4facfe; margin-bottom: 15px; }
</style>

<header class="hero-custom">
    <div class="container">
        <div class="hero-text">
            <h6 class="text-uppercase fw-bold" style="letter-spacing: 2px;">SMK AL BAROKAH CIKEMBAR</h6>
            <h1>Selamat <span style="color: #fff176;">Datang</span></h1>
            <p>Mencetak Generasi Unggul di Bidang Teknologi & Bisnis</p>
        </div>
    </div>
</header>

<div class="container icon-bar-wrapper">
    <div class="icon-card">
        <a href="#" class="icon-box"><i class="fas fa-bullhorn"></i><span>Sambutan</span></a>
        <a href="<?php echo e(url('/profil')); ?>" class="icon-box"><i class="fas fa-lightbulb"></i><span>Visi Misi</span></a>
        <a href="#" class="icon-box"><i class="fas fa-edit"></i><span>PPDB</span></a>
        <a href="#" class="icon-box"><i class="fas fa-running"></i><span>Ekskul</span></a>
        <a href="#" class="icon-box"><i class="fas fa-users"></i><span>Guru</span></a>
        <a href="#" class="icon-box"><i class="fas fa-trophy"></i><span>Prestasi</span></a>
    </div>
</div>

<section class="section-padding">
    <div class="container">
        <div class="section-title-wrapper">
            <h2 class="section-title">Berita & Artikel</h2>
            <a href="#" class="btn btn-outline-primary rounded-pill">Lihat Semua</a>
        </div>
        <div class="row">
            <div class="col-md-3 mb-4">
                <div class="card custom-card h-100">
                    <span class="card-category">Berita</span>
                    <img src="https://via.placeholder.com/400x250" class="card-img-top" alt="Berita">
                    <div class="card-body">
                        <h6 class="fw-bold">Pengumuman Kelulusan Siswa 2026</h6>
                        <p class="text-muted small">Berdasarkan hasil rapat pleno dewan guru...</p>
                        <hr>
                        <div class="d-flex justify-content-between small text-muted">
                            <span><i class="far fa-calendar-alt"></i> 5 Mei 2026</span>
                            <span><i class="far fa-eye"></i> 224</span>
                        </div>
                    </div>
                </div>
            </div>
            </div>
    </div>
</section>

<section class="section-padding section-bg-light">
    <div class="container">
        <div class="section-title-wrapper">
            <h2 class="section-title">Ekstrakurikuler</h2>
            <a href="#" class="btn btn-outline-primary rounded-pill">Lihat Semua</a>
        </div>
        <div class="row text-center">
            <div class="col-md-3">
                <div class="p-4 bg-white rounded-4 shadow-sm">
                    <i class="fas fa-palette fa-3x text-info mb-3"></i>
                    <h5 class="fw-bold">Seni Tari</h5>
                </div>
            </div>
            <div class="col-md-3">
                <div class="p-4 bg-white rounded-4 shadow-sm">
                    <i class="fas fa-camera fa-3x text-info mb-3"></i>
                    <h5 class="fw-bold">Jurnalistik</h5>
                </div>
            </div>
            </div>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <div class="section-title-wrapper">
            <h2 class="section-title">Guru & Staf</h2>
        </div>
        <div class="row text-center">
            <div class="col-md-3">
                <img src="https://via.placeholder.com/150" class="circle-img" alt="Guru">
                <h6 class="fw-bold mb-0">Nama Guru, S.Pd</h6>
                <p class="small text-muted">Guru Mata Pelajaran</p>
            </div>
            </div>
    </div>
</section>

<section class="section-padding section-bg-light">
    <div class="container">
        <div class="section-title-wrapper">
            <h2 class="section-title">Prestasi Siswa</h2>
            <a href="#" class="btn btn-outline-primary rounded-pill">Lihat Semua</a>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card custom-card border-0 shadow-sm">
                    <img src="https://via.placeholder.com/400x250" class="card-img-top" alt="Prestasi">
                    <div class="card-body">
                        <span class="badge bg-warning mb-2">Juara 1</span>
                        <h5 class="fw-bold">Lomba Taekwondo Kabupaten</h5>
                        <p class="text-muted small">Tingkat Kabupaten Sukabumi - Tahun 2026</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\smk-albarokah\resources\views/welcome.blade.php ENDPATH**/ ?>