<div class="form-group">
    <label for="status"><?php echo e(trans('report::admin.filters.status')); ?></label>

    <select name="status" id="status" class="custom-select-black">
        <option value=""><?php echo e(trans('report::admin.filters.please_select')); ?></option>

        <?php $__currentLoopData = trans('order::statuses'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($name); ?>" <?php echo e($request->status === $name ? 'selected' : ''); ?>>
                <?php echo e($label); ?>

            </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>
