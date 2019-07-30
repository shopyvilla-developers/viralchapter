<script>
    window.CloudCMS = {
        version: '{{ CloudCMS_version() }}',
        csrfToken: '{{ csrf_token() }}',
        baseUrl: '{{ url('/') }}',
        langs: {},
        data: {},
        errors: {},
        selectize: {},
    };

    CloudCMS.langs['admin::admin.buttons.delete'] = '{{ trans('admin::admin.buttons.delete') }}';
    CloudCMS.langs['media::media.file_manager.title'] = '{{ trans('media::media.file_manager.title') }}';
    CloudCMS.langs['media::messages.image_has_been_added'] = '{{ trans('media::messages.image_has_been_added') }}';
</script>

@stack('globals')

@routes
