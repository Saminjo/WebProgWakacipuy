<?php $__env->startSection('title'); ?>
    View Product Detail
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <div class="card mx-auto mt-3 mb-3" style="max-width: 990px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="https://picsum.photos/200/300" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Title</h5>
                    <p class="card-text">Desc</p>
                    <p class="card-text">Price</p>
                    <p class="card-text"><small class="text-muted">Category</small></p>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Karvin\Binus\belajar with cinhe\Laravel\Laravel\templateKosong\template\resources\views/view_detail.blade.php ENDPATH**/ ?>