<?php $__env->startSection('title','View Item'); ?>


<?php $__env->startSection('content'); ?>

    <table class="table table-dark table-striped mt-3 mb-3">
        <thead>
        <tr>
            <th scope="col">Item ID</th>
            <th scope="col">Item Image</th>
            <th scope="col">Item Name</th>
            <th scope="col">Item Description</th>
            <th scope="col">Item Price</th>
            <th scope="col">Item Category</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Image</td>
            <td>barang</td>
            <td>pastinya bermanfaat</td>
            <td>5000</td>
            <td>serba bisa</td>
            <td>
                <button type="button" class="btn btn-warning">Update</button>
                <button type="button" class="btn btn-danger">Delete</button>
            </td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Image</td>
            <td>barang1</td>
            <td>pastinya berguna</td>
            <td>6000</td>
            <td>serba bisa</td>
            <td>
                <button type="button" class="btn btn-warning">Update</button>
                <button type="button" class="btn btn-danger">Delete</button>
            </td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Image</td>
            <td>barang3</td>
            <td>pastinya kepake</td>
            <td>7000</td>
            <td>serba bisa</td>
            <td>
                <button type="button" class="btn btn-warning">Update</button>
                <button type="button" class="btn btn-danger">Delete</button>
            </td>
        </tr>
        </tbody>
    </table>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Karvin\Binus\belajar with cinhe\Laravel\Laravel\templateKosong\template\resources\views/view_item.blade.php ENDPATH**/ ?>