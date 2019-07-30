<?php

namespace Modules\Post\Entities;
 
use Modules\Support\Eloquent\Model; 
use Modules\Support\Money; 
class Withdraw extends Model
{
 

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'payment_method','status','amount'];

 



    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();
    }
 
 
  public function getTotalAttribute($total)
    {
        return Money::inDefaultCurrency($total);
    }
    public function user()
    {
        return $this->hasOne('Modules\User\Entities\User','id','user_id');
    }
    public static function withdrawRequest()
    { 
          if (auth()->user()->roles[0]->id == setting('author_role') ) {

             
             return static::where('user_id',auth()->user()->id)->with('user')->latest('updated_at')->take(5)->get();

           
         }else{
             return static::latest('updated_at')->with('user')->take(5)->get();
         } 
       
    }

     /**
     * Get table data for the resource
     *
     * @return \Illuminate\Http\JsonResponse
     */

    public function table()
    {
        
        $query = $this->newQuery();

         if (auth()->user()->roles[0]->id == setting('author_role') ) {
            $query->where('user_id',auth()->user()->id);
         }
 
        return new AdminTable($query);
    }
  
 
}
