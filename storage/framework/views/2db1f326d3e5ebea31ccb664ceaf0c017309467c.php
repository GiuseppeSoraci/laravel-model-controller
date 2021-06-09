<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Movies</h1>

        <p>Our Amazing Movies!</p>

        <?php $__currentLoopData = $movies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div>
                <h4><strong><?php echo e($movie->title); ?></strong></h4>
                <div>Original Title: <?php echo e($movie->original_title); ?></div>
                <div>Nationality: <?php echo e($movie->nationality); ?></div>
                <div>Date: <?php echo e($movie->date); ?></div>
                <div>Vote: <?php echo e($movie->vote); ?></div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\giuse\Desktop\new-project\resources\views/movies.blade.php ENDPATH**/ ?>