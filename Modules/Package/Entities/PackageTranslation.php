<?php

namespace Modules\Package\Entities;

use Modules\Support\Eloquent\TranslationModel;

class PackageTranslation extends TranslationModel
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];
}
