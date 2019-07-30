<div class="row">
    <div class="col-md-8">
        {{ Form::text('city', trans('product::attributes.city'), $errors, $product, [  'required' => true]) }}
        {{ Form::textarea('address', trans('product::attributes.address'), $errors, $product, [  'required' => true]) }}

        {{ Form::text('latitude', trans('product::attributes.latitude'), $errors, $product, [  'required' => true]) }}

        {{ Form::text('longitude', trans('product::attributes.longitude'), $errors, $product, [  'required' => true]) }}
        
        
        
    </div>
</div>
