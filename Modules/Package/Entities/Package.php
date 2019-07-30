<?php

namespace Modules\Package\Entities;

use Modules\Admin\Ui\AdminTable;
use Modules\Support\Eloquent\Model;
use Modules\Support\Eloquent\Translatable;

class Package extends Model
{
    use Translatable;

    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected $with = ['translations'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'is_active','price','validity','number_of_listings','number_of_categories','number_of_tags','number_of_photos','ability_to_add_video','ability_to_add_contact_form','is_recommended','featured','packages_type'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'is_active' => 'boolean',
    ];

    /**
     * The attributes that are translatable.
     *
     * @var array
     */
    protected $translatedAttributes = ['name'];



    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
         
        parent::boot();

        static::addActiveGlobalScope();
    }

 

 

    /**
     * Get table data for the resource
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function table()
    { 
       
        return new AdminTable($this->newQuery());
    }
}
