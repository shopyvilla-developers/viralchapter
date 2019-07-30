<?php echo e(Form::text('name', trans('product::attributes.name'), $errors, $product, ['labelCol' => 2, 'required' => true])); ?>

<?php echo e(Form::wysiwyg('description', trans('product::attributes.description'), $errors, $product, ['labelCol' => 2, 'required' => true])); ?>


<div class="row">
    <div class="col-md-8">
        <?php echo e(Form::select('categories', trans('product::attributes.categories'), $errors, $categories, $product, ['class' => 'selectize prevent-creation', 'multiple' => true])); ?>

        
         <?php echo e(Form::checkbox('is_featured', trans('product::attributes.is_featured'), trans('product::products.form.featured_the_product'), $errors, $product)); ?>


        <?php echo e(Form::checkbox('is_active', trans('product::attributes.is_active'), trans('product::products.form.enable_the_product'), $errors, $product)); ?>

    </div>
</div>
