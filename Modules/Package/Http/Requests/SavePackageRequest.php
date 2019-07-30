<?php

namespace Modules\Package\Http\Requests;

use Illuminate\Validation\Rule;
use Modules\Package\Entities\Package;
use Modules\Core\Http\Requests\Request;

class SavePackageRequest extends Request
{
    /**
     * Available attributes.
     *
     * @var array
     */
    protected $availableAttributes = 'package::attributes';

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [ 
            'name' => 'required',
            'validity' => 'required',
            'number_of_listings' => 'required',
            'number_of_categories' => 'required',
            'number_of_tags' => 'required',
            'number_of_photos' => 'required',
            'ability_to_add_video' => 'required',
            'ability_to_add_contact_form' => 'required',
            'is_recommended' => 'required',
            'featured' => 'required',
            'packages_type' => 'required',
            'is_active' => 'required|boolean',
        ];
    }

 
}
