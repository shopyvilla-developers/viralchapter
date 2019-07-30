<div class="form-group">
    <label for="group"><?php echo e(trans('report::admin.filters.group_by')); ?></label>

    <select name="group" id="group" class="custom-select-black">
        <option value=""><?php echo e(trans('report::admin.filters.please_select')); ?></option>

        <?php $__currentLoopData = trans('report::admin.filters.groups'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($group); ?>" <?php echo e($request->group === $group ? 'selected' : ''); ?>>
                <?php echo e($label); ?>

            </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>
