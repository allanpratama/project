<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mini Project UTS</title>
        <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
    </head>
    <body>
        <div class="container text-center my-5">
            <h1 class="mb-4">Tugas Mini Project UTS</h1>
            
            <img class="class-thumbnail" src="<?php echo e(Vite::asset('resources/images/foto_saya.png')); ?>" alt="image">
            <h3 class="mb-4">Nama : Zainal Arifin</h3>
            <h3 class="mb-4">NIM : 1204210077<h3>
            <h3 class="mb-4">Pemograman Framework<h3>
            <div class="col-md-2 offset-md-5 mt-4">
                <div class="d-grid gap-2">
                    <a class="btn btn-success" href="home">Home</a>
                </div>
            </div>
        </div>
        <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
    </body>
</html>

<?php /**PATH C:\Users\Zen\Documents\kuliah\Semester 4\Pemograman Framework\project_laravel\modul-master-barang\resources\views/welcome.blade.php ENDPATH**/ ?>