<?php $__env->startComponent('admin::components.page.header'); ?>
    <?php $__env->slot('title', trans('admin::resource.create', ['resource' => trans('post::posts.post')])); ?>

    <li><a href="<?php echo e(route('admin.posts.index')); ?>"><?php echo e(trans('post::posts.posts')); ?></a></li>
    <li class="active"><?php echo e(trans('admin::resource.create', ['resource' => trans('post::posts.post')])); ?></li>
<?php echo $__env->renderComponent(); ?>

<?php $__env->startSection('content'); ?>
    <form method="POST" action="<?php echo e(route('admin.posts.store')); ?>" class="form-horizontal" id="Post-create-form" novalidate>
        <?php echo e(csrf_field()); ?>

  
        <?php echo $tabs->render(compact('post')); ?>

    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('post::admin.posts.partials.shortcuts', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->make('admin::layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>