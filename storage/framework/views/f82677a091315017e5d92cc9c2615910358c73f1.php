<div class="form-group">
    <label for="to"><?php echo e(trans('report::admin.filters.date_end')); ?></label>
    <input type="text" name="to" class="form-control datetime-picker" id="to" data-default-date="<?php echo e($request->to); ?>">
</div>
