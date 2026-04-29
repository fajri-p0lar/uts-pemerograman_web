

<?php $__env->startSection('content'); ?>
<div class="container my-5">
    <div class="row">
        <div class="col-md-6">
            <img src="<?php echo e(asset('img/' . $jurusan->foto)); ?>" class="img-fluid rounded shadow" alt="<?php echo e($jurusan->nama_jurusan); ?>">
        </div>
        <div class="col-md-6">
            <h1 class="fw-bold text-primary"><?php echo e($jurusan->nama_jurusan); ?></h1>
            <p class="badge bg-secondary">Keahlian SMK Al Barokah</p>
            <hr>
            <h3>Deskripsi Jurusan</h3>
            <p style="text-align: justify;"><?php echo e($jurusan->deskripsi); ?></p>
            
            <div class="mt-4">
                <a href="<?php echo e(url('/')); ?>" class="btn btn-outline-secondary">Kembali ke Beranda</a>
                <a href="#" class="btn btn-warning">Daftar Sekarang (PPDB)</a>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\smk-albarokah\resources\views/detail_jurusan.blade.php ENDPATH**/ ?>