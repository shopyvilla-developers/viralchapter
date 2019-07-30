<div class="row">
    <div class="col-md-8">
        
        {{ Form::select('supported_locales', trans('setting::attributes.supported_locales'), $errors, $locales, $settings, ['class' => 'selectize prevent-creation', 'required' => true, 'multiple' => true]) }}
        {{ Form::select('default_locale', trans('setting::attributes.default_locale'), $errors, $locales, $settings, ['required' => true]) }}
        {{ Form::select('default_timezone', trans('setting::attributes.default_timezone'), $errors, $timeZones, $settings, ['required' => true]) }}

        {{ Form::select('author_role', trans('setting::attributes.author_role'), $errors, $roles, $settings, ['required' => true]) }}

      

          
        {{ Form::checkbox('welcome_email', trans('setting::attributes.welcome_email'), trans('setting::settings.form.send_welcome_email_after_registration'), $errors, $settings) }}
        {{ Form::checkbox('admin_withdrawal_email', trans('setting::attributes.admin_withdrawal_email'), trans('setting::settings.form.send_withdrawal_notification_to_admin'), $errors, $settings) }}
       
    </div>
</div>
