<?php

namespace Modules\Post\Http\Controllers;

use Modules\Post\Entities\Post;
use Modules\Media\Entities\File;
use Illuminate\Routing\Controller;

class PostController extends Controller
{
    /**
     * Display Post for the slug.
     *
     * @param string $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $logo = File::findOrNew(setting('storefront_header_logo'))->path;
        $post = Post::where('slug', $slug)->firstOrFail();

        return view('public.posts.show', compact('post', 'logo'));
    }
}
