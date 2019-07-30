@extends('admin::layout')

@component('admin::components.page.header')
    @slot('title', trans('admin::resource.edit', ['resource' => trans('post::posts.post')]))
    @slot('subtitle', $post->title)

    <li><a href="{{ route('admin.posts.index') }}">{{ trans('post::posts.posts') }}</a></li>
    <li class="active">{{ trans('admin::resource.edit', ['resource' => trans('post::posts.post')]) }}</li>
@endcomponent

@section('content')
    <form method="POST" action="{{ route('admin.posts.update', $post) }}" class="form-horizontal" id="Post-edit-form" novalidate>
        {{ csrf_field() }}
        {{ method_field('put') }}

        {!! $tabs->render(compact('post')) !!}
    </form>
@endsection

@include('post::admin.posts.partials.shortcuts')
