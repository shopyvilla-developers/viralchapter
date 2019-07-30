<div class="row">
    <div class="col-md-8">
        <?php echo e(Form::text('website', trans('product::attributes.website'), $errors, $product, [])); ?>

        <?php echo e(Form::email('email', trans('product::attributes.email'), $errors, $product, [])); ?>


        <?php echo e(Form::text('facebook', trans('product::attributes.facebook'), $errors, $product, [])); ?>

        <?php echo e(Form::text('twitter', trans('product::attributes.twitter'), $errors, $product, [])); ?>

        <?php echo e(Form::text('linkedin', trans('product::attributes.linkedin'), $errors, $product, [])); ?>


      
        
        
        
    </div>
</div>
