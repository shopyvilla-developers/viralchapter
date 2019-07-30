<?php

namespace Modules\Post\Sidebar;

use Maatwebsite\Sidebar\Item;
use Maatwebsite\Sidebar\Menu;
use Maatwebsite\Sidebar\Group;
use Modules\Admin\Sidebar\BaseSidebarExtender;

class SidebarExtender extends BaseSidebarExtender
{
    public function extend(Menu $menu)
    {
    

         $menu->group(trans('admin::sidebar.content'), function (Group $group) {
             $group->item(trans('post::sidebar.posts'), function (Item $item) {
                $item->icon('fa fa-cube');
                $item->weight(1);
                $item->route('admin.posts.index');
                $item->authorize(
                    $this->auth->hasAnyAccess([
                        'admin.posts.index',
                        'admin.categories.index'  
                    ])
                );

                $item->item(trans('post::sidebar.posts'), function (Item $item) {
                    $item->weight(5);
                    $item->route('admin.posts.index');
                    $item->authorize(
                        $this->auth->hasAccess('admin.posts.index')
                    );
                });
            });
        }); 

         $menu->group(trans('admin::sidebar.content'), function (Group $group) {
             $group->item(trans('post::sidebar.withdraw'), function (Item $item) {
                $item->icon('fa fa-money');
                $item->weight(4);
                $item->route('admin.withdraw.index');
                $item->authorize(
                    $this->auth->hasAnyAccess([
                        'admin.posts.index',
                    ])
                );

            });
        });



    }
}
