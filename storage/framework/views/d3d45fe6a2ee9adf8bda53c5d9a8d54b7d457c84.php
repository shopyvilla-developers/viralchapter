<div class="row">
    <div class="col-md-8">
        <?php echo e(Form::password('password', trans('user::attributes.users.new_password'), $errors)); ?>

        <?php echo e(Form::password('password_confirmation', trans('user::attributes.users.new_password_confirmation'), $errors)); ?>

    </div>

    <div class="col-md-4">
        <h4><?php echo e(trans('user::users.or_reset_password')); ?></h4>

        <a href="<?php echo e(route('admin.users.reset_password', $user)); ?>" class="btn btn-primary btn-reset-password" data-loading>
            <?php echo e(trans('user::users.send_reset_password_email')); ?>

        </a>
    </div>
</div>
