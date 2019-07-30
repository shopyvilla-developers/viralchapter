<?php echo e(Form::text('name', trans('amenity::attributes.name'), $errors, $amenity, ['labelCol' => 2, 'required' => true])); ?>

 
  
<div class="row">
    <div class="col-md-8">
      
<?php echo e(Form::text('icon', trans('amenity::attributes.icon'), $errors, $amenity, [ 'required' => true])); ?>


        <?php echo e(Form::checkbox('is_active', trans('amenity::attributes.is_active'), trans('amenity::amenity.form.enable_the_amenity'), $errors, $amenity,[])); ?>

    </div>
</div>
