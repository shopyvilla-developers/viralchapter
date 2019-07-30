<div class="dashboard-panel">
    <div class="grid-header">
        <h4><i class="fa fa-shopping-cart" aria-hidden="true"></i><?php echo e(trans('admin::dashboard.latest_orders')); ?></h4>
    </div>

    <div class="clearfix"></div>

    <div class="table-responsive anchor-table">
        <table class="table">
            <thead>
                <tr>
                    <th><?php echo e(trans('admin::dashboard.table.latest_orders.order_id')); ?></th>
                    <th><?php echo e(trans('admin::dashboard.table.customer')); ?></th>
                    <th><?php echo e(trans('admin::dashboard.table.latest_orders.status')); ?></th>
                    <th><?php echo e(trans('admin::dashboard.table.latest_orders.total')); ?></th>
                </tr>
            </thead>
            <tbody>
              
                    <tr>
                        <td class="empty" colspan="5"><?php echo e(trans('admin::dashboard.no_data')); ?></td>
                    </tr>
              
            </tbody>
        </table>
    </div>
</div>
