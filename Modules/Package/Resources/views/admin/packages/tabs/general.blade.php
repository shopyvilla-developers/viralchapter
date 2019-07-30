{{ Form::text('name', trans('package::attributes.name'), $errors, $package, ['labelCol' => 2, 'required' => true]) }}
 
  
<div class="row">
    <div class="col-md-8">
    	 {{ Form::select('packages_type', trans('package::packages.tabs.package_type'), $errors, array(0=>'Free',1=>'Paid'), $package,['labelCol' => 5,]) }}

    	 {{ Form::number('price', trans('package::attributes.price'), $errors, $package, [ 'labelCol' => 5]) }}

    	 {{ Form::number('validity', trans('package::attributes.validity'), $errors, $package, ['labelCol' => 5, 'required' => true]) }}

    	 {{ Form::number('number_of_listings', trans('package::attributes.number_of_listings'), $errors, $package, ['labelCol' => 5, 'required' => true]) }}

    	 {{ Form::number('number_of_categories', trans('package::attributes.number_of_categories'), $errors, $package, [ 'labelCol' => 5,'required' => true]) }}

    	 {{ Form::number('number_of_tags', trans('package::attributes.number_of_tags'), $errors, $package, [ 'labelCol' => 5,'required' => true]) }}

    	 {{ Form::number('number_of_photos', trans('package::attributes.number_of_photos'), $errors, $package, ['labelCol' => 5, 'required' => true]) }}



    	 {{ Form::checkbox('ability_to_add_video', '', trans('package::attributes.ability_to_add_video'), $errors, $package,['labelCol' => 5]) }}
         
          {{ Form::checkbox('ability_to_add_contact_form', '', trans('package::attributes.ability_to_add_contact_form'), $errors, $package,['labelCol' => 5]) }}


    	 {{ Form::checkbox('is_recommended', '', trans('package::attributes.is_recommended'), $errors, $package,['labelCol' => 5]) }}

    	 
    	 {{ Form::checkbox('featured', '', trans('package::attributes.featured'), $errors, $package,['labelCol' => 5]) }}
 

        {{ Form::checkbox('is_active', trans('package::attributes.is_active'), trans('package::packages.form.enable_the_package'), $errors, $package,['labelCol' => 5]) }}
    </div>
</div>
