<div class="row">
    <div class="col-md-8">
         <?php echo e(Form::select('amenities', trans('product::attributes.amenities'), $errors, $amenities, $product, ['class' => 'selectize prevent-creation', 'multiple' => true])); ?>


    </div>
</div>
