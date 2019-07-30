@extends('admin::layout')

@section('title', trans('admin::dashboard.dashboard'))

@section('content_header')
    <h2 class="pull-left">{{ trans('admin::dashboard.dashboard') }}</h2>
@endsection

@section('content')
    <div class="grid clearfix">
        <div class="row">
            @hasAccess('admin.posts.index')
                @include('admin::dashboard.grids.total_articles')
                @include('admin::dashboard.grids.authors_earning')
            @endHasAccess

            @hasAccess('admin.posts.index')
                @include('admin::dashboard.grids.paid_views')
            @endHasAccess

            @hasAccess('admin.users.index')
                @include('admin::dashboard.grids.total_authors')
            @endHasAccess
           
            @if($withdrawn)
                @include('admin::dashboard.grids.available_withdrawn')
            @endif
            
        </div>
    </div>

    <div class="row">
        <div class="col-md-7">
            @hasAccess('admin.posts.index')
                @include('admin::dashboard.panels.sales_analytics')
            @endHasAccess

            @hasAccess('admin.posts.index')
                @include('admin::dashboard.panels.withdraw_requests')
            @endHasAccess
        </div>

        <div class="col-md-5">
            @include('admin::dashboard.panels.latest_search_terms')

          
        </div>
    </div>
@endsection
