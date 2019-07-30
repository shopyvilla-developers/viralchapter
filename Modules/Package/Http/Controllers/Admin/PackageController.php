<?php

namespace Modules\Package\Http\Controllers\Admin;

use Modules\Package\Entities\Package;
use Illuminate\Routing\Controller;
use Modules\Admin\Traits\HasCrudActions;
use Modules\Package\Http\Requests\SavePackageRequest;

class PackageController extends Controller
{
    use HasCrudActions;

    /**
     * Model for the resource.
     *
     * @var string
     */
    protected $model = Package::class;

    /**
     * Label of the resource.
     *
     * @var string
     */
    protected $label = 'package::packages.package';

    /**
     * View path of the resource.
     *
     * @var string
     */
    protected $viewPath = 'package::admin.packages';

    /**
     * Form requests for the resource.
     *
     * @var array|string
     */
    protected $validation = SavePackageRequest::class;
}
