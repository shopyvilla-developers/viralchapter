<?php

namespace Modules\Package\Admin;

use Modules\Admin\Ui\AdminTable;

class PackageTable extends AdminTable
{
   

    /**
     * Make table response for the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function make()
    {
        return $this->newTable()
             
            ->editColumn('price', function ($product) {
                if (! $product->hasSpecialPrice()) {
                    return $product->price->format();
                }

                return "<span class='m-r-5'>{$product->special_price->format()}</span>
                    <del class='text-red'>{$product->price->format()}</del>";
            });
    }
}
