<?php

namespace Modules\Package\Admin;

use Modules\Admin\Ui\Tab;
use Modules\Admin\Ui\Tabs; 

class PackageTabs extends Tabs
{
    public function make()
    {
        
        $this->group('package_information', trans('package::packages.tabs.group.package_information'))
            ->active()
            ->add($this->general());
    }

    private function general()
    {
        return tap(new Tab('general', trans('package::packages.tabs.general')), function (Tab $tab) {
            $tab->active();
            $tab->weight(5);
            $tab->fields(['title', 'is_active','price','validity','number_of_listings','number_of_categories','number_of_tags','number_of_photos','ability_to_add_video','ability_to_add_contact_form','is_recommended','featured','packages_type']);
            

            $tab->view('package::admin.packages.tabs.general');
        });
    }

    
}
