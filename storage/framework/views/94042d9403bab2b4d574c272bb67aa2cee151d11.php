<style>
    .setheigh{
        min-height: 30vh;
    }

    .border{
        border-style: dotted;
    }
</style>


<?php $__env->startSection('title','Home'); ?>

<?php $__env->startSection('content'); ?>
    <div class="card bg-dark text-white">
        <img src="https://c1.wallpaperflare.com/preview/173/122/573/trash-empty-recycle-recycling.jpg" class="card-img" alt="">
        <div class="card-img-overlay">
            <h1 class="card-title text-center " style="color: yellow;">RECYCON SHOP</h1>


        </div>
    </div>

    <div class="setheigh">
        <h1 class="d-flex justify-content-center">About Us</h1>
        <h3 class="border border-dark text-center w-75 mx-auto mt-5">We Are a shop for buying recycle things and second hand thing</h3>
    </div>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Karvin\Binus\belajar with cinhe\Laravel\Laravel\templateKosong\template\resources\views/home.blade.php ENDPATH**/ ?>