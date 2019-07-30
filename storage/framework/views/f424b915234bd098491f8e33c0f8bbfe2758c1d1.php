<?php $__env->startComponent('admin::components.page.header'); ?>
    <?php $__env->slot('title', trans('transaction::transactions.transactions')); ?>

    <li class="active"><?php echo e(trans('transaction::transactions.transactions')); ?></li>
<?php echo $__env->renderComponent(); ?>

<?php $__env->startSection('content'); ?>
    <div class="box box-primary">
        <div class="box-body index-table" id="transactions-table"">
            <?php $__env->startComponent('admin::components.table'); ?>
                <?php $__env->slot('thead'); ?>
                    <tr>
                        <th><?php echo e(trans('transaction::transactions.table.order_id')); ?></th>
                        <th><?php echo e(trans('transaction::transactions.table.transaction_id')); ?></th>
                        <th><?php echo e(trans('transaction::transactions.table.payment_method')); ?></th>
                        <th data-sort><?php echo e(trans('admin::admin.table.created')); ?></th>
                    </tr>
                <?php $__env->endSlot(); ?>
            <?php echo $__env->renderComponent(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        DataTable.setRoutes('#transactions-table .table', {
            index: '<?php echo e("admin.transactions.index"); ?>',
        });

        new DataTable('#transactions-table .table', {
            columns: [
                { data: 'order_id' },
                { data: 'transaction_id' },
                { data: 'payment_method' },
                { data: 'created', name: 'created_at' },
            ],
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin::layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>