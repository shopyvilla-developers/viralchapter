<?php

namespace Modules\Product\Admin;

use Modules\Admin\Ui\Tab;
use Modules\Admin\Ui\Tabs; 
use Modules\Category\Entities\Category;
use Modules\Amenity\Entities\Amenity;

class ProductTabs extends Tabs
{
    public function make()
    {
        $this->group('basic_information', trans('product::products.tabs.group.basic_information'))
            ->active()
            ->add($this->general())
            ->add($this->location())
            ->add($this->amenities())
            ->add($this->images())
            ->add($this->seo())
            ->add($this->contact());

        $this->group('advanced_information', trans('product::products.tabs.group.advanced_information'))
            ->add($this->schedule()) 
            ->add($this->additionals());
    }

    private function general()
    {
        return tap(new Tab('general', trans('product::products.tabs.general')), function (Tab $tab) {
            $tab->active();
            $tab->weight(5);
            $tab->fields(['name', 'description', 'is_active']);
            $tab->view('product::admin.products.tabs.general', [
                'categories' => Category::treeList(), 
            ]);
        });
    }
 

    private function location()
    {
        return tap(new Tab('location', trans('product::products.tabs.location')), function (Tab $tab) {
            $tab->weight(10);

            $tab->fields([
                'city',
                'address',
                'latitude',
                'longitude',
            ]);

            $tab->view('product::admin.products.tabs.location');
        });
    }

    private function amenities()
    {
        return tap(new Tab('amenities', trans('product::products.tabs.amenities')), function (Tab $tab) {
            $tab->weight(15);
            $tab->fields(['manage_stock', 'qty', 'in_stock']);
            $tab->view('product::admin.products.tabs.amenities',['amenities' => Amenity::treeList()]);
        });
    }

    private function images()
    {
        if (! auth()->user()->hasAccess('admin.media.index')) {
            return;
        }

        return tap(new Tab('images', trans('product::products.tabs.images')), function (Tab $tab) {
            $tab->weight(20);
            $tab->view('product::admin.products.tabs.images');
        });
    }

    private function seo()
    {
        return tap(new Tab('seo', trans('product::products.tabs.seo')), function (Tab $tab) {
            $tab->weight(25);
            $tab->fields('slug');
            $tab->view('product::admin.products.tabs.seo');
        });
    }
     private function contact()
    {
        return tap(new Tab('contact', trans('product::products.tabs.contact')), function (Tab $tab) {
            $tab->weight(25);
            $tab->fields(['website','email','phone','facebook','twitter','linkedin']);
            $tab->view('product::admin.products.tabs.contact');
        });
    }

    private function schedule()
    {
      

        return tap(new Tab('schedule', trans('product::products.tabs.schedule')), function (Tab $tab) {
            $tab->weight(40);

              $collectL[] = '12 am';
        for ($ci=1; $ci <= 11; $ci++) { 
           $collectL[] = $ci.' am';
        }
        $collectL[] = '12 pm';
         for ($ci=1; $ci <= 11; $ci++) { 
           $collectL[] = $ci.' pm';
        }
        $collectL[] = 'Closed';

            $tab->view('product::admin.products.tabs.schedule', ['collectL'=>$collectL]);
        });
    }

  

    private function additionals()
    {
        return tap(new Tab('additionals', trans('product::products.tabs.additionals')), function (Tab $tab) {
            $tab->weight(55);
            $tab->fields(['new_from', 'new_to']);
            $tab->view('product::admin.products.tabs.additionals');
        });
    }
}
