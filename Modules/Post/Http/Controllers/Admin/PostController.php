<?php

namespace Modules\Post\Http\Controllers\Admin;

use Modules\Post\Entities\Post;
use Illuminate\Routing\Controller;
use Modules\Admin\Traits\HasCrudActions;
use Modules\Post\Http\Requests\SavePostRequest;

class PostController extends Controller
{
    use HasCrudActions;

    /**
     * Model for the resource.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Label of the resource.
     *
     * @var string
     */
    protected $label = 'post::posts.post';

    /**
     * View path of the resource.
     *
     * @var string
     */
    protected $viewPath = 'post::admin.posts';

    /**
     * Form requests for the resource.
     *
     * @var array|string
     */
    protected $validation = SavePostRequest::class;
}
