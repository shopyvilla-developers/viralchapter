<?php $__env->startSection('filters'); ?>
    <?php echo $__env->make('report::admin.reports.filters.from', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('report::admin.reports.filters.to', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('report::admin.reports.filters.status', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('report::admin.reports.filters.group', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <div class="form-group">
        <label for="coupon-code"><?php echo e(trans('report::admin.filters.coupon_code')); ?></label>
        <input type="text" name="coupon_code" class="form-control" id="coupon-code" value="<?php echo e($request->coupon_code); ?>">
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('report_result'); ?>
    <h3 class="tab-content-title"><?php echo e(trans('report::admin.filters.report_types.coupons_report')); ?></h3>

    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th><?php echo e(trans('report::admin.table.date')); ?></th>
                    <th><?php echo e(trans('report::admin.table.coupon_name')); ?></th>
                    <th><?php echo e(trans('report::admin.table.coupon_code')); ?></th>
                    <th><?php echo e(trans('report::admin.table.orders')); ?></th>
                    <th><?php echo e(trans('report::admin.table.total')); ?></th>
                </tr>
            </thead>

            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $report; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><?php echo e($data->start_date->toFormattedDateString()); ?> - <?php echo e($data->end_date->toFormattedDateString()); ?></td>
                        <td><?php echo e($data->name); ?></td>
                        <td><?php echo e($data->code); ?></td>
                        <td><?php echo e($data->total_orders); ?></td>
                        <td><?php echo e($data->total->format()); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td class="empty" colspan="8"><?php echo e(trans('report::admin.no_data')); ?></td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>

        <div class="pull-right">
            <?php echo $report->links(); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('report::admin.reports.layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>