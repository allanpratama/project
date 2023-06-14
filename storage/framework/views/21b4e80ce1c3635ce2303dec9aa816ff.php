<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($pageTitle); ?></title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-light bg-info">
        <div class="container">
            <a href="<?php echo e(route('home')); ?>" class="navbar-brand mb-0 h1"><i class="bi-hexagon-fill me-2"></i>Master Barang</a>

            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <hr class="d-lg-none text-white-50">

                <ul class="navbar-nav flex-row flex-wrap">
                    <li class="nav-item col-6 col-md-auto"><a href="<?php echo e(route('home')); ?>" class="nav-link">Home</a></li>
                    <li class="nav-item col-2 col-md-auto"><a href="<?php echo e(route('barang.index')); ?>" class="nav-link">List Barang</a></li>
                </ul>

                <hr class="d-lg-none text-white-50">

                <a href="<?php echo e(route('profile')); ?>" class="btn btn-outline-light my-2 ms-md-auto"><i class="bi-person-circle me-1"></i> My Profile</a>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h4><?php echo e($pageTitle); ?></h4>
        <hr>
        <img class="mx-auto d-block" src="<?php echo e(Vite::asset('resources/images/foto_saya.png')); ?>" alt="featurette" width="400px">
        <h1 class="text-center">Zainal Arifin (1204210077)</h1>
        <hr class="featurette-divider">
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">Zainal Arifin</h2>
        <p class="lead">Hallo!! Perkenalkan Nama saya Zainal Arifin Nim saya 1204210077. Saya lahir di Surabaya Pada tanggal 27 November 2002 saya merupakan anak ke 2 dari 2 bersaudara. Saya pernah bersekolah di SDN Waru 1, pada saat smp saya melanjutkan di SMP Jati Agung setelah lulus sekolah smp saya mengambil di sekolah SMK YPM 1 TAMAN Sidoarjo saya ambil dijurusan Teknik Komputer dan Jaringan dan sekarang saya berlanjut kuliah di Institut Teknologi Telkom Surabaya</p>
      </div>
      <div class="col-md-5">
      <img class="class-thumbnail" src="<?php echo e(Vite::asset('resources/images/foto saya.jpg')); ?>" alt="featurette" width="350px">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading fw-normal lh-1">My Idol</h2>
        <p class="lead">Saya mengidolakan seseorang yang menurut saya sangat menginspirasi saya dalam hidup saya yaitu Rizky Febian. Rizky Febian ini merupakan musisi sangat pandai dalam menciptakan sebuah lagu yang bagus, salah satu nya lagu favorite saya yang selalu dengarkan adalah :</p>
        <ul class="list-group">
            <li class="list-group-item">Hingga Tua Bersama</li>
            <li class="list-group-item">Ragu</li>
            <li class="list-group-item">Indah Pada Waktunya</li>
            <li class="list-group-item">Menari</li>
            <li class="list-group-item">Cukup Tau</li>
            <li class="list-group-item">Keseriusan</li>
            <li class="list-group-item">Cuek</li>
            <li class="list-group-item">Pepatah</li>
            <li class="list-group-item">Penantian Berharga</li>
        </ul>
      </div>
      <div class="col-md-5 order-md-1">
      <img class="class-thumbnail" src="<?php echo e(Vite::asset('resources/images/rizky_febian.jpeg')); ?>" alt="featurette" width="250px">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">My Hobby</h2>
        <p class="lead">Dalam Hobby saya suka melakukan beberapa hal pada saat meluangkan waktu kosong yaitu Dengerkan lagu, menyanyi, dan saya juga suka bermain game. Pada akhir-akhir ini saya juga suka menfoto random atau kemandangan tetapi saya masih belajar dalam hal berfoto.</p>
      </div>
      <div class="col-md-5">
      <img class="class-thumbnail" src="<?php echo e(Vite::asset('resources/images/foto_dulu.jpg')); ?>" alt="featurette" width="350px">
      </div>
    </div>

    </div>
    </div>

    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
</body>
</html>
<?php /**PATH C:\Users\Zen\Documents\kuliah\Semester 4\Pemograman Framework\project_laravel\modul-master-barang\resources\views/profile.blade.php ENDPATH**/ ?>