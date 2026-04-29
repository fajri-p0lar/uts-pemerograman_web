

<?php $__env->startSection('content'); ?>
<div class="container my-5">
    <div class="row">
        <div class="col-md-8">
            <h2 class="fw-bold text-primary">Profil SMK Al Barokah</h2>
            <hr>
            <p class="lead">SMK Al Barokah Cikembar adalah lembaga pendidikan kejuruan yang berfokus pada pengembangan karakter dan keahlian siswa.</p>
            
            <h4 class="mt-4">Visi</h4>
            <p>"Menjadi SMK unggul yang mencetak lulusan religius, kompeten, dan mandiri."</p>
            
            <h4 class="mt-4">Misi</h4>
            <ul>
                <li>Menyelenggarakan pendidikan berbasis teknologi dan budi pekerti.</li>
                <li>Menjalin kerjasama erat dengan dunia industri.</li>
                <li>Mencetak wirausaha muda yang kreatif.</li>
            </ul>
        </div>
        <div class="col-md-4">
            <div class="card bg-light border-0">
                <div class="card-body text-center">
                    <img src="<?php echo e(asset('img/kepala-sekolah.jpg')); ?>" class="rounded-circle mb-3" width="150" alt="Kepala Sekolah">
                    <h5>Nama Kepala Sekolah</h5>
                    <p class="text-muted">Kepala Sekolah SMK Al Barokah</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\smk-albarokah\resources\views/profil.blade.php ENDPATH**/ ?>