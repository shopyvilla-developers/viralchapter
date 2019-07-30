@extends('admin::layout')

@component('admin::components.page.header')
    @slot('title', trans('package::packages.packages'))

    <li class="active">{{ trans('package::packages.packages') }}</li>
@endcomponent

@component('admin::components.page.index_table')
    @slot('resource', 'packages')
    @slot('buttons', ['create'])
    @slot('name', trans('package::packages.package'))

    @slot('thead')
        <tr>
            @include('admin::partials.table.select_all')

            <th>{{ trans('package::packages.table.name') }}</th>

            <th>{{ trans('package::attributes.price') }}</th>
            <th>{{ trans('admin::admin.table.status') }}</th>
            <th data-sort>{{ trans('admin::admin.table.created') }}</th>
        </tr>
    @endslot
@endcomponent

@push('scripts')
    <script>
        new DataTable('#packages-table .table', {
            columns: [
                { data: 'checkbox', orderable: false, searchable: false, width: '3%' },
                { data: 'name', name: 'translations.name', orderable: false, defaultContent: '' },
                { data: 'price', searchable: false },
                { data: 'status', name: 'is_active', searchable: false },
                { data: 'created', name: 'created_at' },
            ],
        });
    </script>
@endpush
