<?php

namespace Modules\Post\Http\Controllers\Admin;

use Modules\Post\Entities\Withdraw;
use Illuminate\Routing\Controller;
use Modules\Admin\Traits\HasCrudActions;
use Modules\Post\Http\Requests\SaveWithdrawRequest;

class WithdrawController extends Controller
{
    use HasCrudActions;

    /**
     * Model for the resource.
     *
     * @var string
     */
    protected $model = Withdraw::class;

    /**
     * Label of the resource.
     *
     * @var string
     */
    protected $label = 'post::withdraw.withdraw';

    /**
     * View path of the resource.
     *
     * @var string
     */
    protected $viewPath = 'post::admin.withdraw';

    /**
     * Form requests for the resource.
     *
     * @var array|string
     */
    protected $validation = SaveWithdrawRequest::class;
}
