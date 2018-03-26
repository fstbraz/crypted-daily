<table class="table table-hover">
    <thead>
    <tr>
        <th class="text-center d-none d-md-block d-lg-block d-xl-block">#</th>
        <th><?php echo app('translator')->getFromJson('market.table.name'); ?></th>
        <th class="text-right"><?php echo app('translator')->getFromJson('market.table.price'); ?></th>
        <th class="text-right"><?php echo app('translator')->getFromJson('market.table.market_cap'); ?></th>
        <th class="text-right"><?php echo app('translator')->getFromJson('market.table.change'); ?></th>
    </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td class="text-center d-none d-md-block d-lg-block d-xl-block"><?php echo e($loop->index + 1); ?></td>
            <td class="txt-oflo"><a href="<?php echo e(route('home.coin', $item->symbol)); ?>"><?php echo e($item->symbol); ?></a></td>
            <td class="text-right"><sup>$</sup> <?php echo e($item->price_usd); ?></td>
            <td class="text-right"><sup>$</sup> <?php echo e($item->market_cap_usd); ?></td>
            <td class="text-right"><span class="<?php echo e($text_class); ?>"><?php echo e($item->percent_change_24h); ?> %</span></td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>