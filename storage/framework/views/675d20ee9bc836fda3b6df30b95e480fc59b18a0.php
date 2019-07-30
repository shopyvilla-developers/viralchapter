<?php $__env->startComponent('admin::components.page.header'); ?>
    <?php $__env->slot('title', trans('admin::resource.edit', ['resource' => trans('package::packages.package')])); ?>
    <?php $__env->slot('subtitle', $package->title); ?>

    <li><a href="<?php echo e(route('admin.packages.index')); ?>"><?php echo e(trans('package::packages.packages')); ?></a></li>
    <li class="active"><?php echo e(trans('admin::resource.edit', ['resource' => trans('package::packages.package')])); ?></li>
<?php echo $__env->renderComponent(); ?>

<?php $__env->startSection('content'); ?>
    <form method="POST" action="<?php echo e(route('admin.packages.update', $package)); ?>" class="form-horizontal" id="Package-edit-form" novalidate>
        <?php echo e(csrf_field()); ?>

        <?php echo e(method_field('put')); ?>


        <?php echo $tabs->render(compact('package')); ?>

    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('package::admin.packages.partials.shortcuts', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->make('admin::layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>