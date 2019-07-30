<?php $__env->startComponent('admin::components.page.header'); ?>
    <?php $__env->slot('title', trans('media::media.media')); ?>

    <li class="active"><?php echo e(trans('media::media.media')); ?></li>
<?php echo $__env->renderComponent(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('media::admin.media.partials.uploader', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <div class="box box-primary">
        <div class="box-header"></div>

        <?php echo $__env->make('media::admin.media.partials.table', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('shortcuts'); ?>
    <dl class="dl-horizontal">
        <dt><code>u</code></dt>
        <dd><?php echo e(trans('media::media.upload_new_file')); ?></dd>
    </dl>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        Mousetrap.bind('u', function() {
            $('.dropzone').trigger('click');
        });

        Mousetrap.bind('del', function () {
            $('.btn-delete').trigger('click');
        });

        DataTable.setRoutes('#media-table .table', {
            index: 'admin.media.index',
            destroy: 'admin.media.destroy',
        });

        new DataTable('#media-table .table', {
            columns: [
                { data: 'checkbox', orderable: false, searchable: false, width: '3%' },
                { data: 'thumbnail', orderable: false, searchable: false, width: '10%' },
                { data: 'filename', name: 'filename' },
                { data: 'created', name: 'created_at' },
            ],
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin::layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>