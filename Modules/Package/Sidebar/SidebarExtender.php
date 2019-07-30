<?php

namespace Modules\Package\Sidebar;

use Maatwebsite\Sidebar\Item;
use Maatwebsite\Sidebar\Menu;
use Maatwebsite\Sidebar\Group;
use Modules\Admin\Sidebar\BaseSidebarExtender;

class SidebarExtender extends BaseSidebarExtender
{
    public function extend(Menu $menu)
    {
          $menu->group(trans('admin::sidebar.content'), function (Group $group) {
            $group->item(trans('package::sidebar.packages'), function (Item $item) {
                $item->icon('fa fa-tags');
                $item->weight(3);
                $item->route('admin.packages.index');
                $item->authorize(
                    $this->auth->hasAccess('admin.packages.index')
                );
            });
        });

 



    }
}
