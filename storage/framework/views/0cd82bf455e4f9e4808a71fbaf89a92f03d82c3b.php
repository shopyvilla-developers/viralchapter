<script>
    window.CloudCMS = {
        version: '<?php echo e(CloudCMS_version()); ?>',
        csrfToken: '<?php echo e(csrf_token()); ?>',
        baseUrl: '<?php echo e(url('/')); ?>',
        langs: {},
        data: {},
        errors: {},
        selectize: {},
    };

    CloudCMS.langs['admin::admin.buttons.delete'] = '<?php echo e(trans('admin::admin.buttons.delete')); ?>';
    CloudCMS.langs['media::media.file_manager.title'] = '<?php echo e(trans('media::media.file_manager.title')); ?>';
    CloudCMS.langs['media::messages.image_has_been_added'] = '<?php echo e(trans('media::messages.image_has_been_added')); ?>';
</script>

<?php echo $__env->yieldPushContent('globals'); ?>

<?php echo app('Tightenco\Ziggy\BladeRouteGenerator')->generate(); ?>
