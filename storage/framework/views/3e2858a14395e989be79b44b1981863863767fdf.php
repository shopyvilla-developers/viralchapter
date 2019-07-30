<?php $__env->startComponent('admin::components.page.header'); ?>
    <?php $__env->slot('title', trans('admin::resource.edit', ['resource' => trans('amenity::amenity.amenity')])); ?>
    <?php $__env->slot('subtitle', $amenity->title); ?>

    <li><a href="<?php echo e(route('admin.amenity.index')); ?>"><?php echo e(trans('amenity::amenity.amenity')); ?></a></li>
    <li class="active"><?php echo e(trans('admin::resource.edit', ['resource' => trans('amenity::amenity.amenity')])); ?></li>
<?php echo $__env->renderComponent(); ?>

<?php $__env->startSection('content'); ?>
    <form method="POST" action="<?php echo e(route('admin.amenity.update', $amenity)); ?>" class="form-horizontal" id="Amenity-edit-form" novalidate>
        <?php echo e(csrf_field()); ?>

        <?php echo e(method_field('put')); ?>


        <?php echo $tabs->render(compact('amenity')); ?>

    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('amenity::admin.amenity.partials.shortcuts', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->make('admin::layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>