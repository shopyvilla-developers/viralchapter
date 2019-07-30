<?php $__env->startComponent('admin::components.page.header'); ?>
    <?php $__env->slot('title', trans('report::admin.reports')); ?>

    <li class="active"><?php echo e(trans('report::admin.reports')); ?></li>
<?php echo $__env->renderComponent(); ?>

<?php $__env->startSection('content'); ?>
    <div class="box box-primary report-wrapper">
        <div class="box-body">
            <div class="row">
                <div class="col-lg-9 col-md-8">
                    <div class="report-result">
                        <?php echo $__env->yieldContent('report_result'); ?>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="filter-report clearfix">
                        <h3 class="tab-content-title"><?php echo e(trans('report::admin.filter')); ?></h3>

                        <form method="GET" action="<?php echo e(route('admin.reports.index')); ?>">
                            <div class="form-group">
                                <label for="report-type"><?php echo e(trans('report::admin.filters.report_type')); ?></label>

                                <select name="type" id="report-type" class="custom-select-black">
                                    <?php $__currentLoopData = trans('report::admin.filters.report_types'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($type); ?>" <?php echo e($request->type === $type ? 'selected' : ''); ?>>
                                            <?php echo e($label); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>

                            <?php echo $__env->yieldContent('filters'); ?>

                            <button type="submit" class="btn btn-default pull-right" data-loading>
                                <?php echo e(trans('report::admin.filter')); ?>

                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin::layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>