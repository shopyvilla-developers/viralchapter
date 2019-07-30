<?php

namespace Modules\Admin\Http\Controllers\Admin;

use Modules\User\Entities\User;
use Modules\Order\Entities\Order;
use Illuminate\Routing\Controller; 
use Modules\Product\Entities\Product;
use Modules\Product\Entities\SearchTerm;

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
           
            'totalCustomers' => User::totalCustomers(),
            'latestSearchTerms' => $this->getLatestSearchTerms(),
            'latestOrders' => $this->getLatestOrders(), 
        ];

   
          if (auth()->user()->roles[0]->id == setting('seller_role') ) {
            
              $dData['totalOrders'] = Order::whereHas('products', function ($q) { 

                                            $q->where('user_id', '=', auth()->user()->id);
                                        })->count();


              $totalSale = Order::whereHas('products', function ($q) { 

                                            $q->where('user_id', '=', auth()->user()->id);
                                        })->get();

               $dData['totalSales'] = Order::TtotalSales($totalSale->sum('total'));               
               $dData['sales_wallet'] = Money::inDefaultCurrency(auth()->user()->sales_wallet);

              $dData['totalProducts'] = Product::withoutGlobalScope('active')->where('user_id',auth()->user()->id)->count();
            }else{
                 $dData['totalSales'] = Order::totalSales();
                 $dData['totalOrders'] = Order::count();
                 $dData['totalProducts'] = Product::withoutGlobalScope('active')->count();
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
    private function getLatestOrders()
    {
        return Order::select([
            'id',
            'customer_first_name',
            'customer_last_name',
            'total',
            'status',
            'created_at',
        ])
        ->latest()
        ->take(5)
        ->get();
    }

    
}
