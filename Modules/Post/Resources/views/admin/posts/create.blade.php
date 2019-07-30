@extends('admin::layout')

@component('admin::components.page.header')
    @slot('title', trans('admin::resource.create', ['resource' => trans('post::posts.post')]))

    <li><a href="{{ route('admin.posts.index') }}">{{ trans('post::posts.posts') }}</a></li>
    <li class="active">{{ trans('admin::resource.create', ['resource' => trans('post::posts.post')]) }}</li>
@endcomponent

@section('content')
    <form method="POST" action="{{ route('admin.posts.store') }}" class="form-horizontal" id="Post-create-form" novalidate>
        {{ csrf_field() }}
  
        {!! $tabs->render(compact('post')) !!}
    </form>
@endsection

@include('post::admin.posts.partials.shortcuts')
