<?php

namespace Modules\Post\Entities;
 
use Modules\Support\Eloquent\Model;
use Modules\Post\Entities\Post;
use Modules\Support\Money;
use Illuminate\Support\Facades\DB;
class Views extends Model
{
 

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['ip', 'post_id','country','amount'];

 



    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();
    }

    

    public static function authorsEarning()
    {

          if (auth()->user()->roles[0]->id == setting('author_role') ) {

            $postIds = Post::where('user_id',auth()->user()->id)->get()->pluck('id')->toArray();
             return static::whereIn('post_id',$postIds)->get()->sum('amount');

           
         }else{
           return static::all()->sum('amount');
         }


       
    }


    public static function paidViews()
    {
       
         if (auth()->user()->roles[0]->id == setting('author_role') ) {

            $postIds = Post::where('user_id',auth()->user()->id)->get()->pluck('id')->toArray();
             return static::whereIn('post_id',$postIds)->get()->count();

           
         }else{
            return  static::all()->count();
         }
 
    }
  public function getTotalAttribute($total)
    {
        return Money::inDefaultCurrency($total);
    }
 public static function salesAnalytics()
    {
        $query = static::selectRaw('SUM(amount) as total')
            ->selectRaw('COUNT(*) as total_orders')
            ->whereBetween('created_at', [now()->startOfWeek(), now()->endOfWeek()])
            ->selectRaw('EXTRACT(DAY FROM created_at) as day')
            ->groupBy(DB::raw('EXTRACT(DAY FROM created_at)'))
            ->orderby('day');
          

              if (auth()->user()->roles[0]->id == setting('author_role') ) {
                 $postIds = Post::where('user_id',auth()->user()->id)->get()->pluck('id')->toArray();

                    $anData = $query->whereIn('post_id',$postIds)->get();
            }else{
                     $anData = $query->get();
            }

           return $anData;
            
    }
 
}
