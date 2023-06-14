<?php $__env->startSection('content'); ?>
    <div class="container-sm my-5">
        <div class="row justify-content-center">
            <div class="p-5 bg-light rounded-3 col-xl-4 border">
                <div class="mb-3 text-center">
                    <i class="bi-person-circle fs-1"></i>
                    <h4>Detail Barang</h4>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="kodebarang" class="form-label">Kode Barang</label>
                        <h5><?php echo e($barang->kodebarang); ?></h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="namabarang" class="form-label">Nama Barang</label>
                        <h5><?php echo e($barang->namabarang); ?></h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="hargabarang" class="form-label">Harga Barang</label>
                        <h5><?php echo e($barang->hargabarang); ?></h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="deskripsibarang" class="form-label">Kode Barang</label>
                        <h5><?php echo e($barang->deskripsibarang); ?></h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="satuan_id" class="form-label">Satuan</label>
                        <h5><?php echo e($barang->satuan->namasatuan); ?></h5>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 d-grid">
                        <a href="<?php echo e(route('barang.index')); ?>" class="btn btn-outline-dark btn-lg mt-3"><i class="bi-arrow-left-circle me-2"></i>Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Zen\Documents\kuliah\Semester 4\Pemograman Framework\project_laravel\modul-master-barang\resources\views/barang/show.blade.php ENDPATH**/ ?>