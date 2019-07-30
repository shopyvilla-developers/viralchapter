<?php $__env->startSection('title', trans('admin::dashboard.dashboard')); ?>

<?php $__env->startSection('content_header'); ?>
    <h2 class="pull-left"><?php echo e(trans('admin::dashboard.dashboard')); ?></h2>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="grid clearfix">
        <div class="row">
            <?php if ($currentUser->hasAccess('admin.posts.index')) : ?>
                <?php echo $__env->make('admin::dashboard.grids.total_articles', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <?php echo $__env->make('admin::dashboard.grids.authors_earning', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php endif; ?>

            <?php if ($currentUser->hasAccess('admin.posts.index')) : ?>
                <?php echo $__env->make('admin::dashboard.grids.paid_views', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php endif; ?>

            <?php if ($currentUser->hasAccess('admin.users.index')) : ?>
                <?php echo $__env->make('admin::dashboard.grids.total_authors', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php endif; ?>
           
            <?php if($withdrawn): ?>
                <?php echo $__env->make('admin::dashboard.grids.available_withdrawn', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php endif; ?>
            
        </div>
    </div>

    <div class="row">
        <div class="col-md-7">
            <?php if ($currentUser->hasAccess('admin.posts.index')) : ?>
                <?php echo $__env->make('admin::dashboard.panels.sales_analytics', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php endif; ?>

            <?php if ($currentUser->hasAccess('admin.posts.index')) : ?>
                <?php echo $__env->make('admin::dashboard.panels.withdraw_requests', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php endif; ?>
        </div>

        <div class="col-md-5">
            <?php echo $__env->make('admin::dashboard.panels.latest_search_terms', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

          
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin::layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>