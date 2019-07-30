<?php

namespace Modules\Admin\Http\Controllers\Admin;

use Modules\User\Entities\User; 
use Modules\Post\Entities\Post; 
use Modules\Post\Entities\Withdraw; 
use Modules\Post\Entities\Views; 
use Illuminate\Routing\Controller; 
use Modules\Product\Entities\Product;
use Modules\Post\Entities\SearchTerm;
use Modules\Support\Money;

class DashboardController extends Controller
{
    /**
     * Display the dashboard with its widgets.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
         $dData = [ 
           
            'totalAuthors' => User::totalAuthors(),
            'totalArticles' => Post::totalArticles(),
            'authorsEarning' => Money::inDefaultCurrency(Views::authorsEarning()),
            'paidViews' => Views::paidViews(),
            'latestSearchTerms' => $this->getLatestSearchTerms(), 
            'withdrawRequest' => Withdraw::withdrawRequest(), 
            'withdrawn' => false,
        ];

  
          if (auth()->user()->roles[0]->id == setting('author_role') ) {           
                $dData['withdrawn'] = true;
               $dData['available_withdrawn'] = Money::inDefaultCurrency(auth()->user()->author_wallet);

             
            } 


        return view('admin::dashboard.index',$dData );
    }

    private function getLatestSearchTerms()
    {
        return SearchTerm::latest('updated_at')->take(5)->get();
    }

    /**
     * Get latest five orders.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    

    
}
