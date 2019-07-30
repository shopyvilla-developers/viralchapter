
<?php $__currentLoopData = array('saturday','sunday','monday','tuesday','wednesday','thursday','friday'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    	<div class="row">
    	<div class="col-md-6">
    		<?php echo e(Form::select($value.'_opening', trans('product::attributes.'.$value.'_opening'), $errors,$collectL, $product,['labelCol' => 4])); ?>

    	</div>
    	<div class="col-md-6">
    		<?php echo e(Form::select($value.'_closing', trans('product::attributes.'.$value.'_closing'), $errors,$collectL, $product,['labelCol' => 4])); ?>

    	</div>
    	</div>

    	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
