<?php $__env->startComponent('admin::components.page.header'); ?>
    <?php $__env->slot('title', trans('admin::resource.create', ['resource' => trans('option::options.option')])); ?>

    <li><a href="<?php echo e(route('admin.options.index')); ?>"><?php echo e(trans('option::options.options')); ?></a></li>
    <li class="active"><?php echo e(trans('admin::resource.create', ['resource' => trans('option::options.option')])); ?></li>
<?php echo $__env->renderComponent(); ?>

<?php $__env->startSection('content'); ?>
    <form method="POST" action="<?php echo e(route('admin.options.store')); ?>" class="form-horizontal" id="option-create-form" novalidate>
        <?php echo e(csrf_field()); ?>


        <?php echo $tabs->render(compact('option')); ?>

    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('option::admin.options.partials.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->make('admin::layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>