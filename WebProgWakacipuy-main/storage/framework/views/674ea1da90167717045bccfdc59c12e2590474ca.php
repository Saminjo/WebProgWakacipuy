<?php $__env->startSection('title','Edit Profile'); ?>


<?php $__env->startSection('content'); ?>
    <div class="row justify-content-center ms-5 mt-5 mb-5">
        <div class="col-md-9">
        <form class="row g-3 needs-validation" novalidate>
            <div class="col-sm-14 mb-3">
                <label for="validationCustom01" class="form-label">New Username</label>
                <input type="text" class="form-control" name="username">
            </div>

            <div class="col-md-14 mb-3">
                <label for="validationCustom03" class="form-label">New Email</label>
                <input type="text" class="form-control" name="email">
            </div>

            <div class="col-7">
                <button class="btn btn-primary" type="submit">Save</button>
            </div>
        </form>
        </div>
    </div>


<?php $__env->stopSection(); ?>




<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Karvin\Binus\belajar with cinhe\Laravel\Laravel\templateKosong\template\resources\views/edit_profile.blade.php ENDPATH**/ ?>