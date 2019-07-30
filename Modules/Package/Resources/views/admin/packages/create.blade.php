@extends('admin::layout')

@component('admin::components.page.header')
    @slot('title', trans('admin::resource.create', ['resource' => trans('package::packages.package')]))

    <li><a href="{{ route('admin.packages.index') }}">{{ trans('package::packages.packages') }}</a></li>
    <li class="active">{{ trans('admin::resource.create', ['resource' => trans('package::packages.package')]) }}</li>
@endcomponent

@section('content')
    <form method="POST" action="{{ route('admin.packages.store') }}" class="form-horizontal" id="Package-create-form" novalidate>
        {{ csrf_field() }}
  
        {!! $tabs->render(compact('package')) !!}
    </form>
@endsection

@include('package::admin.packages.partials.shortcuts')
