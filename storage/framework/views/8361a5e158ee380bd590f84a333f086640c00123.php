<?php echo e(Form::text('name', trans('city::attributes.name'), $errors, $city, ['labelCol' => 2, 'required' => true])); ?>

 
  
<div class="row">
    <div class="col-md-8">
      
 
        <?php echo e(Form::checkbox('is_active', trans('city::attributes.is_active'), trans('city::city.form.enable_the_city'), $errors, $city,[])); ?>

    </div>
</div>
