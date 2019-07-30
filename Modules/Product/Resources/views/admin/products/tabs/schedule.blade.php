
@foreach(array('saturday','sunday','monday','tuesday','wednesday','thursday','friday') as $value)
    	<div class="row">
    	<div class="col-md-6">
    		{{ Form::select($value.'_opening', trans('product::attributes.'.$value.'_opening'), $errors,$collectL, $product,['labelCol' => 4]) }}
    	</div>
    	<div class="col-md-6">
    		{{ Form::select($value.'_closing', trans('product::attributes.'.$value.'_closing'), $errors,$collectL, $product,['labelCol' => 4]) }}
    	</div>
    	</div>

    	@endforeach
