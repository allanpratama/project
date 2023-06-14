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
            <h1 class="mb-4"><b>MINI PROJECT UTS</b></h1>
            
            <img class="class-thumbnail" src="<?php echo e(Vite::asset('resources/images/laravell.png')); ?>" alt="image">
            <div class="col-md-2 offset-md-5 mt-4">
                <div class="d-grid gap-2">
                    <a class="btn btn-info" href="home">Home</a>
                </div>
            </div>
        </div>
        <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
    </body>
</html>

<?php /**PATH C:\Users\Allan\Downloads\master barang uts\master barang uts\resources\views/welcome.blade.php ENDPATH**/ ?>