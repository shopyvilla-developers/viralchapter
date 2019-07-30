<div class="row">
    <div class="col-md-8">
        {{ Form::text('website', trans('product::attributes.website'), $errors, $product, []) }}
        {{ Form::email('email', trans('product::attributes.email'), $errors, $product, []) }}

        {{ Form::text('facebook', trans('product::attributes.facebook'), $errors, $product, []) }}
        {{ Form::text('twitter', trans('product::attributes.twitter'), $errors, $product, []) }}
        {{ Form::text('linkedin', trans('product::attributes.linkedin'), $errors, $product, []) }}

      
        
        
        
    </div>
</div>
