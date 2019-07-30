<?php $__env->startComponent('admin::components.page.header'); ?>
    <?php $__env->slot('title', trans('admin::resource.create', ['resource' => trans('package::packages.package')])); ?>

    <li><a href="<?php echo e(route('admin.packages.index')); ?>"><?php echo e(trans('package::packages.packages')); ?></a></li>
    <li class="active"><?php echo e(trans('admin::resource.create', ['resource' => trans('package::packages.package')])); ?></li>
<?php echo $__env->renderComponent(); ?>

<?php $__env->startSection('content'); ?>
    <form method="POST" action="<?php echo e(route('admin.packages.store')); ?>" class="form-horizontal" id="Package-create-form" novalidate>
        <?php echo e(csrf_field()); ?>

  
        <?php echo $tabs->render(compact('package')); ?>

    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('package::admin.packages.partials.shortcuts', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->make('admin::layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>