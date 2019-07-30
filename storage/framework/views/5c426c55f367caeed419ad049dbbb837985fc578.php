<?php $__env->startComponent('admin::components.page.header'); ?>
    <?php $__env->slot('title', trans('admin::resource.create', ['resource' => trans('city::city.city')])); ?>

    <li><a href="<?php echo e(route('admin.city.index')); ?>"><?php echo e(trans('city::city.city')); ?></a></li>
    <li class="active"><?php echo e(trans('admin::resource.create', ['resource' => trans('city::city.city')])); ?></li>
<?php echo $__env->renderComponent(); ?>

<?php $__env->startSection('content'); ?>
    <form method="POST" action="<?php echo e(route('admin.city.store')); ?>" class="form-horizontal" id="City-create-form" novalidate>

        <?php echo e(csrf_field()); ?>

  
       
        <?php echo $tabs->render(compact('city')); ?>

    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('city::admin.city.partials.shortcuts', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->make('admin::layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>