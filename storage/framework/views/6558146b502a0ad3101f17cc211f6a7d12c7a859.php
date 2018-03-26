<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">

<head>
    <?php echo $__env->make('layouts.includes.meta', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php echo $__env->yieldPushContent('before-styles'); ?>
    <link href="<?php echo e(asset('asset/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('asset/css/style.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('asset/css/colors/' . $theme_color . '.min.css')); ?>" id="theme" rel="stylesheet">
    <?php echo $__env->yieldPushContent('after-styles'); ?>
</head>

<body class="fix-header card-no-border">

<div id="main-wrapper">
    <?php echo $__env->make('layouts.includes.header-topbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php echo $__env->make('layouts.includes.sidebar-left', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <div class="page-wrapper">
        <div class="container-fluid">
            <?php echo $__env->make('layouts.includes.breadcrumb', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <?php echo $__env->make('flash::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <?php echo $__env->yieldContent('content'); ?>
        </div>

        <?php echo $__env->make('layouts.includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>

    <?php if($show_donate_button): ?>
        <?php echo $__env->make('layouts.includes.donate-modal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endif; ?>
</div>

<?php echo $__env->yieldPushContent('before-scripts'); ?>
<script src="<?php echo e(asset('asset/vendor/jquery/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('asset/vendor/bootstrap/js/tether.min.js')); ?>"></script>
<script src="<?php echo e(asset('asset/vendor/bootstrap/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('asset/vendor/sticky-kit-master/sticky-kit.min.js')); ?>"></script>
<script src="<?php echo e(asset('asset/js/jquery.slimscroll.js')); ?>"></script>
<script src="<?php echo e(asset('asset/js/sidebarmenu.min.js')); ?>"></script>
<script src="<?php echo e(asset('asset/js/custom.min.js')); ?>"></script>
<?php if(isset($adsense_pub_id)): ?>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<?php endif; ?>
<?php echo $__env->yieldPushContent('after-scripts'); ?>

<?php echo $__env->make('layouts.includes.ga', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>

</html>