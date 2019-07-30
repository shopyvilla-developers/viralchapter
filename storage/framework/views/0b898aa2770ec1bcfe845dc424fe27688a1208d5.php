<?php if($paginator->hasPages()): ?>
    <ul class="pagination">
        
        <?php if($paginator->onFirstPage()): ?>
            <li class="disabled"><span><?php echo e(trans('admin::admin.pagination.previous')); ?></span></li>
        <?php else: ?>
            <li><a href="<?php echo e($paginator->previousPageUrl()); ?>" rel="prev"><?php echo e(trans('admin::admin.pagination.previous')); ?></a></li>
        <?php endif; ?>

        
        <?php if($paginator->hasMorePages()): ?>
            <li><a href="<?php echo e($paginator->nextPageUrl()); ?>" rel="next"><?php echo e(trans('admin::admin.pagination.next')); ?></a></li>
        <?php else: ?>
            <li class="disabled"><span><?php echo e(trans('admin::admin.pagination.next')); ?></span></li>
        <?php endif; ?>
    </ul>
<?php endif; ?>
