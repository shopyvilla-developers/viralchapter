<?php $__env->startComponent('admin::components.page.header'); ?>
    <?php $__env->slot('title', trans('admin::resource.create', ['resource' => trans('user::roles.role')])); ?>

    <li><a href="<?php echo e(route('admin.roles.index')); ?>"><?php echo e(trans('user::roles.roles')); ?></a></li>
    <li class="active"><?php echo e(trans('admin::resource.create', ['resource' => trans('user::roles.role')])); ?></li>
<?php echo $__env->renderComponent(); ?>

<?php $__env->startSection('content'); ?>
    <form method="POST" action="<?php echo e(route('admin.roles.store')); ?>" class="form-horizontal" id="role-create-form" novalidate>
        <?php echo e(csrf_field()); ?>


        <?php echo $tabs->render(compact('role')); ?>

    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user::admin.roles.partials.shortcuts', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->make('admin::layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>