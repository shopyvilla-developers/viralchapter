<?php $__env->startComponent('admin::components.page.header'); ?>
    <?php $__env->slot('title', trans('package::packages.packages')); ?>

    <li class="active"><?php echo e(trans('package::packages.packages')); ?></li>
<?php echo $__env->renderComponent(); ?>

<?php $__env->startComponent('admin::components.page.index_table'); ?>
    <?php $__env->slot('resource', 'packages'); ?>
    <?php $__env->slot('buttons', ['create']); ?>
    <?php $__env->slot('name', trans('package::packages.package')); ?>

    <?php $__env->slot('thead'); ?>
        <tr>
            <?php echo $__env->make('admin::partials.table.select_all', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <th><?php echo e(trans('package::packages.table.name')); ?></th>

            <th><?php echo e(trans('package::attributes.price')); ?></th>
            <th><?php echo e(trans('admin::admin.table.status')); ?></th>
            <th data-sort><?php echo e(trans('admin::admin.table.created')); ?></th>
        </tr>
    <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        new DataTable('#packages-table .table', {
            columns: [
                { data: 'checkbox', orderable: false, searchable: false, width: '3%' },
                { data: 'name', name: 'translations.name', orderable: false, defaultContent: '' },
                { data: 'price', searchable: false },
                { data: 'status', name: 'is_active', searchable: false },
                { data: 'created', name: 'created_at' },
            ],
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin::layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>