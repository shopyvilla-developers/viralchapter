<div class="dashboard-panel">
    <div class="grid-header">
        <h4><i class="fa fa-money" aria-hidden="true"></i>{{ trans('admin::dashboard.withdraw_requests') }}</h4>
    </div>

    <div class="clearfix"></div>

    <div class="table-responsive anchor-table">
        <table class="table">
            <thead>
                <tr>
                    <th>{{ trans('admin::dashboard.table.latest_withdraw.withdraw_id') }}</th>
                    <th>{{ trans('admin::dashboard.table.author') }}</th>
                    <th>{{ trans('admin::dashboard.table.latest_withdraw.status') }}</th>
                    <th>{{ trans('admin::dashboard.table.latest_withdraw.amount') }}</th>
                </tr>
            </thead>
            <tbody>
              
                   @forelse ($withdrawRequest as $latestRequest)
                    <tr>
                        <td>
                            <a href=" ">
                               #{{ $latestRequest->id }}
                            </a>
                        </td>
                        <td>
                            <a href=" ">
                                {{ $latestRequest->user->getFullNameAttribute() }}
                            </a>
                        </td>
                        <td>
                            <a href=" ">
                                {{ $latestRequest->status }}
                            </a>
                        </td>
                        <td>
                            <a href=" ">
                                {{ $latestRequest->total->format($latestRequest->currency) }}
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td class="empty" colspan="5">{{ trans('admin::dashboard.no_data') }}</td>
                    </tr>
                @endforelse
              
            </tbody>
        </table>
    </div>
</div>
