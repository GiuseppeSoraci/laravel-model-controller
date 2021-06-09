<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>HOMEPAGE</h1>
        <ul>
            <h2>We have</h2>
            <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($element); ?></li>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>

        <h2>Movie Production Companies</h2>
        <?php $__currentLoopData = $productions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $production): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo e($production); ?><?php if(!$loop->last): ?>,<?php else: ?>.<?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <p>We are better then Netflix!</p>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\giuse\Desktop\new-project\resources\views/home.blade.php ENDPATH**/ ?>