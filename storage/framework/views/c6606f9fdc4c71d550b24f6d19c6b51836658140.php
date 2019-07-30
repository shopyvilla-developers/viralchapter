<?php $__env->startComponent('admin::components.page.header'); ?>
    <?php $__env->slot('title', trans('admin::resource.edit', ['resource' => trans('user::users.user')])); ?>
    <?php $__env->slot('subtitle', $user->full_name); ?>

    <li><a href="<?php echo e(route('admin.users.index')); ?>"><?php echo e(trans('user::users.users')); ?></a></li>
    <li class="active"><?php echo e(trans('admin::resource.edit', ['resource' => trans('user::users.user')])); ?></li>
<?php echo $__env->renderComponent(); ?>

<?php $__env->startSection('content'); ?>
    <form method="POST" action="<?php echo e(route('admin.users.update', $user)); ?>" class="form-horizontal" id="user-edit-form" novalidate>
        <?php echo e(csrf_field()); ?>

        <?php echo e(method_field('put')); ?>


        <?php echo $tabs->render(compact('user')); ?>

    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user::admin.users.partials.shortcuts', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->make('admin::layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>