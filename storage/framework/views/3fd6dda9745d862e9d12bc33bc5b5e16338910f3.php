<footer class="footer">
    <?php if($show_donate_button): ?>
        <button type="button" class="btn btn-secondary btn-sm pull-right" data-toggle="modal" data-target="#myModal">Donate</button>
    <?php endif; ?>
    Copyright © <?php echo e(date('Y')); ?> <?php echo e($app_name); ?>.<br/>
</footer>