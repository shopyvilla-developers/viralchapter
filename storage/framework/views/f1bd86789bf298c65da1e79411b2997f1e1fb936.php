<div class="dashboard-panel">
    <div class="grid-header">
        <h4><i class="fa fa-money" aria-hidden="true"></i><?php echo e(trans('admin::dashboard.withdraw_requests')); ?></h4>
    </div>

    <div class="clearfix"></div>

    <div class="table-responsive anchor-table">
        <table class="table">
            <thead>
                <tr>
                    <th><?php echo e(trans('admin::dashboard.table.latest_withdraw.withdraw_id')); ?></th>
                    <th><?php echo e(trans('admin::dashboard.table.author')); ?></th>
                    <th><?php echo e(trans('admin::dashboard.table.latest_withdraw.status')); ?></th>
                    <th><?php echo e(trans('admin::dashboard.table.latest_withdraw.amount')); ?></th>
                </tr>
            </thead>
            <tbody>
              
                   <?php $__empty_1 = true; $__currentLoopData = $withdrawRequest; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $latestRequest): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td>
                            <a href=" ">
                               #<?php echo e($latestRequest->id); ?>

                            </a>
                        </td>
                        <td>
                            <a href=" ">
                                <?php echo e($latestRequest->user->getFullNameAttribute()); ?>

                            </a>
                        </td>
                        <td>
                            <a href=" ">
                                <?php echo e($latestRequest->status); ?>

                            </a>
                        </td>
                        <td>
                            <a href=" ">
                                <?php echo e($latestRequest->total->format($latestRequest->currency)); ?>

                            </a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td class="empty" colspan="5"><?php echo e(trans('admin::dashboard.no_data')); ?></td>
                    </tr>
                <?php endif; ?>
              
            </tbody>
        </table>
    </div>
</div>
