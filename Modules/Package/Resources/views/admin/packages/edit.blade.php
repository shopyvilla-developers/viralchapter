@extends('admin::layout')

@component('admin::components.page.header')
    @slot('title', trans('admin::resource.edit', ['resource' => trans('package::packages.package')]))
    @slot('subtitle', $package->title)

    <li><a href="{{ route('admin.packages.index') }}">{{ trans('package::packages.packages') }}</a></li>
    <li class="active">{{ trans('admin::resource.edit', ['resource' => trans('package::packages.package')]) }}</li>
@endcomponent

@section('content')
    <form method="POST" action="{{ route('admin.packages.update', $package) }}" class="form-horizontal" id="Package-edit-form" novalidate>
        {{ csrf_field() }}
        {{ method_field('put') }}

        {!! $tabs->render(compact('package')) !!}
    </form>
@endsection

@include('package::admin.packages.partials.shortcuts')
