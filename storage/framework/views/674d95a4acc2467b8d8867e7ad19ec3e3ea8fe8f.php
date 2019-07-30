<div class="sales-analytics">
    <div class="grid-header clearfix">
        <h4><i class="fa fa-bar-chart" aria-hidden="true"></i>Earning Analystics</h4>
    </div>

    <div class="canvas">
        <canvas class="chart" width="400" height="250"></canvas>
    </div>
</div>

<?php $__env->startPush('globals'); ?>
    <script>
        CloudCMS.langs['admin::dashboard.sales_analytics.orders'] = '<?php echo e(trans('admin::dashboard.sales_analytics.orders')); ?>';
        CloudCMS.langs['admin::dashboard.sales_analytics.sales'] = '<?php echo e(trans('admin::dashboard.sales_analytics.sales')); ?>';
    </script>
<?php $__env->stopPush(); ?>
