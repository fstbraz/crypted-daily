

<?php $__env->startSection('title', 'Cryptocurrency News'); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-12">
            <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <article>
                    <div class="card">
                        <div class="card-block">
                            <h4 class="card-title">
                                <a href="<?php echo e(route('news.go', $data->hashid)); ?>" rel="nofollow"
                                   target="_blank"><?php echo e($data->title); ?></a>
                            </h4>
                            <div class="small-text">
                                <i class="fa fa-calendar"></i>&nbsp;&nbsp;<?php echo e($data->published_on); ?>

                            </div>
                            <p><?php echo e($data->body); ?></p>
                            <div class="bottom-article">
                                <a href="<?php echo e(route('news.go', $data->hashid)); ?>" rel="nofollow" target="_blank"
                                   class="pull-right btn btn-sm btn-rounded btn-outline-primary"><?php echo app('translator')->getFromJson('buttons.news.read_more'); ?>
                                    <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </article>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <nav><?php echo $news->render('vendor.pagination.simple-bootstrap-4'); ?> </nav>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>