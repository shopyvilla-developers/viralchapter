<?php echo e(Form::text('name', trans('post::attributes.name'), $errors, $post, ['labelCol' => 2, 'required' => true])); ?>

<?php echo e(Form::wysiwyg('body', trans('post::attributes.body'), $errors, $post, ['labelCol' => 2, 'required' => true])); ?>

       <input type="hidden" name="user_id" required value="<?php echo e(($post->user_id) ? $post->user_id : auth()->user()->id); ?>">
<div class="row">
    <div class="col-md-8">
    	 <?php echo e(Form::select('categories', trans('post::attributes.categories'), $errors, $categories, $post, ['class' => 'selectize prevent-creation', 'multiple' => true])); ?>

        <?php echo e(Form::checkbox('is_active', trans('post::attributes.is_active'), trans('post::posts.form.enable_the_post'), $errors, $post)); ?>

    </div>
</div>
