<?php $__env->startComponent('admin::components.page.header'); ?>
    <?php $__env->slot('title', trans('admin::resource.create', ['resource' => trans('page::pages.page')])); ?>

    <li><a href="<?php echo e(route('admin.pages.index')); ?>"><?php echo e(trans('page::pages.pages')); ?></a></li>
    <li class="active"><?php echo e(trans('admin::resource.create', ['resource' => trans('page::pages.page')])); ?></li>
<?php echo $__env->renderComponent(); ?>

<?php $__env->startSection('content'); ?>
    <form method="POST" action="<?php echo e(route('admin.pages.store')); ?>" class="form-horizontal" id="page-create-form" novalidate>
    
        <?php echo e(csrf_field()); ?>

    <?php echo dd($tabs); ?>

        <?php echo $tabs->render(compact('page')); ?>

    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('page::admin.pages.partials.shortcuts', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->make('admin::layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>