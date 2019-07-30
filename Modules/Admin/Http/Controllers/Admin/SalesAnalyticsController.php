<?php

namespace Modules\Admin\Http\Controllers\Admin;

use Modules\Post\Entities\Views;
use Illuminate\Routing\Controller;

class SalesAnalyticsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            'labels' => trans('admin::dashboard.sales_analytics.day_names'),
            'data' => Views::salesAnalytics(),
        ]);
    }
}
