

<?php $__env->startSection('title', App\Library\SeoHelper::title()); ?>

<?php $__env->startSection('content'); ?>
    <!-- Row -->
    <div class="row">
        <!-- Column -->
        <div class="col-12">

            <div class="ribbon-wrapper-reverse card">
                <div class="ribbon ribbon-bookmark ribbon-vertical-r ribbon-danger"><i class="fa fa-heart-o"></i></div>
                <div class="card-block">
                    <h2 class="card-title text-primary"><?php echo app('translator')->getFromJson('home.title'); ?></h2>
                    <p class="text-muted"><?php echo app('translator')->getFromJson('home.sub_title_1'); ?>  <?php echo e(number_format($coins_approx)); ?><?php echo app('translator')->getFromJson('home.sub_title_2'); ?></p>
                    <p class="card-text">
                        <?php echo e($app_name); ?> <?php echo app('translator')->getFromJson('home.text_sub_title_1'); ?> <?php echo e(number_format($coins_approx)); ?><?php echo app('translator')->getFromJson('home.text_sub_title_2'); ?>
                    </p>
                    <a href="<?php echo e(route('home.market')); ?>" class="btn btn-rounded btn-outline-success"><?php echo app('translator')->getFromJson('home.title_button'); ?></a>
                </div>
            </div>

            <?php if(isset($adsense_pub_id, $adsense_slot1_id)): ?>
                <?php echo $__env->make('frontend.partials.adsense', ['slot_id' => $adsense_slot1_id], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php endif; ?>

            <div class="card">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="p-20">
                            <h4 class="card-subtitle"><?php echo app('translator')->getFromJson('home.card_subtitle'); ?></h4>
                            <div class="message-box m-t-30">
                                <div class="message-widget">
                                    <?php $__currentLoopData = $top_coins; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $symbol => $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <a class="coin_list" href="#" data-attr="<?php echo e($symbol); ?>">
                                            <div class="user-img">
                                                <img src="<?php echo e(asset('asset/images/coins/tn/' . $c['logo'])); ?>" alt="user"
                                                     class="img-circle">
                                            </div>
                                            <div class="mail-contnet">
                                                <h5><?php echo e($c['name']); ?> (<?php echo e($symbol); ?>)</h5>
                                                <span class="mail-desc"><?php echo app('translator')->getFromJson('home.price'); ?>: <?php echo e($c['price']); ?></span>
                                                <span class="time"><?php echo app('translator')->getFromJson('home.change'); ?>: <?php echo e($c['change']); ?>%</span>
                                            </div>
                                        </a>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 b-l">
                        <div id="chart-div" class="card-block">
                            <h4 class="font-medium text-inverse">&nbsp;</h4>
                            <div class="price-chart" style="height: 420px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>
    <!-- Row -->

    <?php if(isset($adsense_pub_id, $adsense_slot2_id)): ?>
        <?php echo $__env->make('frontend.partials.adsense', ['slot_id' => $adsense_slot2_id], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endif; ?>


    <div class="row">

        <div class="col-lg-6">
            <div class="card">
                <div class="card-block bg-light-success">
                    <div class="row">
                        <div class="col-6">
                            <h2 class="m-b-0"><?php echo app('translator')->getFromJson('home.daily_top_gainers'); ?></h2>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <?php echo $__env->make('frontend.partials.table-list', ['items' => $gainers, 'text_class' => 'text-success'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-block bg-light-warning">
                    <div class="row">
                        <div class="col-6">
                            <h2 class="m-b-0"><?php echo app('translator')->getFromJson('home.daily_top_losers'); ?></h2>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <?php echo $__env->make('frontend.partials.table-list', ['items' => $losers, 'text_class' => 'text-danger'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </div>
            </div>
        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('after-styles'); ?>
    <link href="<?php echo e(asset('asset/vendor/chartist-js/dist/chartist.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('asset/vendor/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css')); ?>"
          rel="stylesheet">
<?php $__env->stopPush(); ?>

<?php $__env->startPush('before-scripts'); ?>
    <script>
        var AJAX_URL = "<?php echo e(route('api.history')); ?>";
    </script>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('after-scripts'); ?>
    <script src="<?php echo e(asset('asset/vendor/chartist-js/dist/chartist.min.js')); ?>"></script>
    <script src="<?php echo e(asset('asset/vendor/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js')); ?>"></script>
    <script src="<?php echo e(asset('asset/js/home.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>