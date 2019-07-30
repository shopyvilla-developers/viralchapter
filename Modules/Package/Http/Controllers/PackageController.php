<?php

namespace Modules\Package\Http\Controllers;

use Modules\Package\Entities\Package;
use Modules\Media\Entities\File;
use Illuminate\Routing\Controller;

class PackageController extends Controller
{
    /**
     * Display Package for the slug.
     *
     * @param string $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $logo = File::findOrNew(setting('storefront_header_logo'))->path;
        $package = Package::where('slug', $slug)->firstOrFail();

        return view('public.packages.show', compact('package', 'logo'));
    }
}
