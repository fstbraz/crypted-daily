<?php if(isset($crumbs)): ?>
    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo e(route('home.index')); ?>">Home</a></li>
                <?php $__currentLoopData = $crumbs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $label=>$url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($loop->last): ?>
                        <li class="breadcrumb-item active"><?php echo e($label); ?></li>
                    <?php else: ?>
                        <li class="breadcrumb-item"><a href="<?php echo e($url); ?>"><?php echo e($label); ?></a></li>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ol>
        </div>
    </div>
<?php endif; ?>
